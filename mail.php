<?php

$to= 'mailhostingserver@gmail.com';
$subject = 'Test subject';
$message = 'Hello Test';
$headers = 'From: info@get-job.online' . "\r\n" .
'Reply-To: info@get-job.online' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))
{
echo "test mail success";
}else
{
echo "test mail not success";
}
?>