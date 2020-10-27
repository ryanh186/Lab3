<?php
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$sql = "SELECT * FROM email_login_table WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);

if($num_rows == 1) {
  header("Location: SurveyPage.html");
} else {

  echo '<script>window.location.replace("index.html"); alert("Incorrect login information");</script>';
}
 ?>
