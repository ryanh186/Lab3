


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





