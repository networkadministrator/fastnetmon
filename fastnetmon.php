#!/usr/bin/php
<?php
$IP_ATTACK          = $argv[ 1 ];
$DIRECTION_ATTACK   = $argv[ 2 ];
$POWER_ATTACK       = $argv[ 3 ];
$ACTION_ATTACK      = $argv[ 4 ];

	 if ($DIRECTION_ATTACK=="incoming"){
	$turu="Saldiri geliyor.";
}else{
	$turu="Saldiri yapiliyor.";
}

 if ( $ACTION_ATTACK == "ban") {
	 $baslik=$IP_ATTACK." IP adresinden ".$POWER_ATTACK." pps degerinde ".$turu;
	 include '/opt/fastnetmon/smtp/class.phpmailer.php';
include '/opt/fastnetmon/smtp/class.smtp.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'mail.isimkayit.com';
$mail->Port = 587;
$mail->Username = 'trbak@isimkayit.com';
$mail->Password = 'drXKoqb7';
$mail->SetFrom($mail->Username, 'isimkayit DDOS monitoring');
$mail->AddAddress('mustafa.karavus@isimkayit.com', 'Mustafa Karavuþ');
$mail->CharSet = 'UTF-8';
$mail->Subject = $baslik;
$mail->MsgHTML($ACTION_ATTACK);
if($mail->Send()) {
    echo 'Mail gönderildi!';
} else {
    echo 'Mail gönderilirken bir hata oluþtu: ' . $mail->ErrorInfo;
 }}
  if ( $ACTION_ATTACK == "attack_details") {
	 $baslik=$IP_ATTACK." IP adresinden ".$POWER_ATTACK." pps degerinde ".$turu;
	 include '/opt/fastnetmon/smtp/class.phpmailer.php';
include '/opt/fastnetmon/smtp/class.smtp.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'mail.isimkayit.com';
$mail->Port = 587;
$mail->Username = 'trbak@isimkayit.com';
$mail->Password = 'drXKoqb7';
$mail->SetFrom($mail->Username, 'isimkayit DDOS monitoring');
$mail->AddAddress('mustafa.karavus@isimkayit.com', 'Mustafa Karavuþ');
$mail->CharSet = 'UTF-8';
$mail->Subject = $baslik;
$mail->MsgHTML($ACTION_ATTACK);
if($mail->Send()) {
    echo 'Mail gönderildi!';
} else {
    echo 'Mail gönderilirken bir hata oluþtu: ' . $mail->ErrorInfo;
 }}
?>