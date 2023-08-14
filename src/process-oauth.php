<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('db.php');
session_start();

if (!isset($_GET['code'])) {
    echo 'no code';
    exit();
}

$discord_code = $_GET['code'];

$payload = [
    'code' => $discord_code,
    'client_id' => '1078161089658888223',
    'client_secret' => 'sUpVG8fSTaOD3KQyFMP6swvmFunt9e3U',
    'grant_type' => 'authorization_code',
    'redirect_uri' => 'http://localhost/laesquinarp/src/process-oauth.php',
    'scope' => 'identify%20guids',
];

$payload_string = http_build_query($payload);
$discord_token_url = "https://discordapp.com/api/oauth2/token";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $discord_token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

if (!$result) {
    echo curl_error($ch);
}

$result = json_decode($result, true);
if (isset($result['access_token'])) {
    $access_token = $result['access_token'];

    $discord_users_url = "https://discord.com/api/users/@me";
    $header = array("Authorization: Bearer $access_token", "Content-Type: application/x-www-form-urlencoded");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_URL, $discord_users_url);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $result = curl_exec($ch);

    if ($result) {
        $userData = json_decode($result, true);

        $user_data_from_db = getUserFromDatabase($pdo, $userData['id']);

        if (!$user_data_from_db) {
            addUserToDatabase($pdo, $userData['id'], $userData['avatar']);
        }

        $_SESSION['logged_in'] = true;
        $_SESSION['userData'] = [
            'discord_id' => $userData['id'],
            'name' => $userData['username'],
            'avatar' => $userData['avatar'],
        ];

        header("location: dashboard.php");
        exit();
    } else {
        echo "Error fetching user data from Discord API";
    }
} else {
    echo "Error fetching access token";
}
