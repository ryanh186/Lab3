<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
$db = mysqli_connect('127.0.0.1', 'root', 'Kjh21498!', 'sys') or die('Error connecting to server');
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$t = time() - (86400 * 7);

$sql = "SELECT phone_num FROM survey_table WHERE current_times >= $t";
$result = mysqli_query($db,$sql);

$sid = 'AC08939373f3289c2222905ab94b1f57b3';
$token = 'abd695442c48568b7d5c536f86f60f34';
$client = new Client($sid, $token);

while($row = mysqli_fetch_array($result)){
	$phone_num = $row['phone_num'];
  $client->messages->create(
      '+1'.$phone_num,
      [
          'from' => '+18053016686',
          'body' => "One of our employees has tested positive within 7 days of your visit. Please act accordingly to local legislature regarding COVID-19"
      ]
  );
}
header('Location: SurveyPage.html')
?>
