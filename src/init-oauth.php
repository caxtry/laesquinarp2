<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1078161089658888223&redirect_uri=http%3A%2F%2Flocalhost%2Flaesquinarp%2Fsrc%2Fprocess-oauth.php&response_type=code&scope=identify";
header("Location: $discord_url");
exit();

?>