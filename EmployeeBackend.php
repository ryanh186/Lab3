


<html>
<style>
    * {
        box-sizing: border-box;

    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    p{
        margin: 100px;
        text-align: center;
        font-size: large;
        font-family: "Berlin Sans FB";
    }
    h1{
        margin: auto;
        text-align: center;
        font-family: Arial;
    }
    .button {
        border-radius: 4px;
        background-color: limegreen;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        margin: auto;
        display: flex;
        width: 125px;
        transition: all 0.5s;
        cursor: pointer;
    }

    .button span {
        cursor: pointer;
        display: flex;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }

</style>
<title>Thank You!</title>
<head style="text-transform: full-width">
    <img src="covid_tracker_logo.png" alt="Logo" class="center">
    <h1>Thank you <?php echo $_GET["firstname"]. " ". $_GET["lastname"]; ?> for filling out the COVID-19 Survey</h1>

    <p>We will be sending any information on potential COVID development within the establishment to the desired email: <?php echo $_GET["email"]; ?> </p>
    <p>Emergency Text through Phone number: <?php echo $_GET["PhoneNumber"]; ?> </p>
    <p>Date Submitted: <?php echo $_GET["Date"]; ?> </p>


</head>
<br>
<button onclick="location.href ='EmployeeSurvey.html';" id="myButton"class="button"><span>Survey </span></button>

</html>





