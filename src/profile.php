<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/svg+xml" href="../asset/icon.png" />
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #031f25;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .profile-card {
            background-color: #2C2F33;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .profile-card h2 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: white;
        }
        .profile-settings {
            margin-top: 1rem;
            text-align: left;
            color: white;
        }
        .profile-settings label {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
        }
        .profile-settings input[type="text"],
        .profile-settings input[type="file"],
        .profile-settings button {
            width: 100%;
            padding: 0.5rem;
            border: none;
            background-color: #40444B;
            color: white;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
        .profile-settings button {
            background-color: #7289DA;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .profile-settings button:hover {
            background-color: #5B6EAE;
        }
        .logout-link {
            color: red;
            font-size: 1.2rem;
        }
        .Go-Back {
            color: gray;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
        header("Location: index.php");
        exit();
    }

    // Retrieve user data from the session
    $userData = $_SESSION['userData'];
    ?>

    <div class="profile-card">
        <div class="team_banner">
        <img src="<?php echo 'https://cdn.discordapp.com/avatars/' . $userData['discord_id'] . '/' . $userData['avatar'] . '.jpg'; ?>" alt="Avatar">
        </div>
        <h2><?php echo $userData['name']; ?></h2>
        <div class="profile-settings">
            <h3>Profile Settings</h3>
            <label for="username">Cambiar Usuario:</label>
            <input type="text" id="username" class="input_field2" placeholder="Usuario Nuevo">
            <button id="changeUsernameButton" class="button">Change</button>
            <br>
            <label for="avatar">Change Avatar:</label>
            <input type="file" id="avatar" accept="image/*">
            <button id="changeAvatarButton" class="button">Upload</button>
            <br>
            <button id="saveSettingsButton" class="button">Save Settings</button>
        </div>
        <a href="logout.php" class="logout-link">Logout</a>
        <br>
        <a href="./dashboard.php" class="Go-Back">Go back</a>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="copyright">Copyright &copy; La Esquina RP all rights reserved.</p>
        </div>
    </footer>
</body>
</html>
