<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC08939373f3289c2222905ab94b1f57b3';
$token = 'abd695442c48568b7d5c536f86f60f34';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+17088006340',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18053016686',
        // the body of the text message you'd like to send
        'body' => "One of our employees has tested positive within 7 days of your visit. Please act accordingly to local legislature regarding COVID-19"
    ]
);
