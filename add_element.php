<?php
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$sql = "INSERT INTO email_login_table (email, password) VALUES ('$email', '$password')";
mysqli_query($db, $sql);
header("Location: index.html");

?>
