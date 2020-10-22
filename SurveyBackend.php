



<?php
$con =mysqli_connect('localhost', 'root', 'root', 'cmsc4375_lab3', port('3306'));

if (!$con)
{
    echo 'connection fail';
}
if (!mysqli_select_db($con, 'cmsc4375_lab3'))
{
    echo 'Database Not Selected';
}
$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$Email = $_POST['email'];
$Phone = $_POST['PhoneNumber'];

$sql = "INSERT INTO customer (customerFirstName, customerLastName, customerEmail, customerPhoneNum) values ('$FirstName','$LastName', '$Email', '$Phone')";

if(!mysqli_query($con,$sql)) {
    echo 'Not Inserted';
} else {
    echo 'Inserted';
}
header("refresh;2; url=SurveyPage.html");
?>

<html>
<style>
    p{
        margin: auto;
        text-align: center;
        font-size: large;
        font-family: "Berlin Sans FB";
    }
    h1{
        margin: auto;
        text-align: center;
        font-family: "Berlin Sans FB";
    }
</style>
<head style="text-transform: full-width">
    <h1>Thank you <?php echo $_GET["firstname"]. " ". $_GET["lastname"]; ?> for filling out the COVID-19 Survey</h1>

    <p>We will be sending any information on potential COVID development within the establishment to the desired email: <?php echo $_GET["email"]; ?> </p>
    <p>and Emergency Text through Phone number: <?php echo $_GET["PhoneNumber"]; ?> </p>


</head>

</html>





