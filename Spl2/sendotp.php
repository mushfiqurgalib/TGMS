<?php
$url = "http://66.45.237.70/api.php";
$number=$_POST['mobile'];
$text="Hello Bangladesh";
$data= array(
'username'=>"G4L18",
'password'=>"59FZRDXM",
'number'=>"$number",
'message'=>"$text"
);

$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);
$p = explode("|",$smsresult);
$sendstatus = $p[0];

echo $sendstatus;


//Send SMS  from your database using php


?>