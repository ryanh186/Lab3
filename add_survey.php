<?php
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$firstname = mysqli_real_escape_string($db, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($db, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$phonenum = mysqli_real_escape_string($db, $_REQUEST['PhoneNumber']);
$partySize = mysqli_real_escape_string($db, $_REQUEST['partySize']);
$t = time();
$sql = "INSERT INTO survey_table (first_name, last_name, email, phone_num, party_size, current_times) VALUES ('$firstname', '$lastname', '$email', '$phonenum', '$partySize', '$t')";
mysqli_query($db, $sql);
header("Location: SurveyPage.html");

?>
