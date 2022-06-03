<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use function PHPSTORM_META\map;



$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = 'true';

$mail->Username = 'gabrielelombardo.contactme@gmail.com';

$mail->Password = 'contactme01';

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->Port = '587';

$mail->setFrom='gabrielelombardo.contactme@gmail.com';

$mail -> Subject = "Contatto da: $name";

$mail->addAddress('romanoedoardo13@gmail.com');

$mail->Body = "email: $email \n\nMessaggio: $message" ;


$mail->send();
header("location: new_index.php");
$var = "email inviata con successo";
$_SESSION['checkEmail'] = $var;

?>