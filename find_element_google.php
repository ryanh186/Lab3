<?php
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$id = mysqli_real_escape_string($db, $_REQUEST['id']);
$sql = "SELECT * FROM google_login_table WHERE google_login_id = '$id'";
$result = mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);
echo json_encode($num_rows);

 ?>
