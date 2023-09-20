<?php
$req = '"type:"now_playing","page":1';

if(isset($_GET['id'])){
    $req = '"type":"movie","id": '.$_GET['id'];
}
// echo 'hallo' . $req;
// Setting up the cURL request
$ch = curl_init();
$url = 'https://api.pulllee.com';
// Skip SSL Verification (it's self-signed)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);
// Set the HTTP headers (the stuff you send to the API)
curl_setopt($ch, CURLOPT_HTTPHEADER, [
'Authorization: m1RK0wm0Ld4amyxTxdFyltBehuOH7mLX', // Your API key goes here
// 'request: {"type":"now_playing"}' // The request body goes here
'request: {'.$req.'}' // The request body goes here
]);
// Capture the output instead of echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute the cURL request
$response = curl_exec($ch);
// Check and handle errors
if (curl_errno($ch)) {
echo 'Error: ' . curl_error($ch);
curl_close($ch);
exit(); // Don't execute further
}
// Close the cURL request
curl_close($ch);
// Convert the response from json to an associative array
$response = json_decode($response);
// Dump the response in the browser
// Use the $response object as you wish!
// var_dump($response)
?>