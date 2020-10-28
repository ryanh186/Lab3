<?php
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$id = mysqli_real_escape_string($db, $_REQUEST['id']);
$sql = "INSERT INTO google_login_table (google_login_id) VALUES ('$id')";
mysqli_query($db, $sql);

?>
