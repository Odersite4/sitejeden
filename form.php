<?php
use PHPMailer\PHPMailer\PHPMailer;//������������� ��� ����� � ����������� ������� php � �������, ������� � ����� �������� ��������
$firstName = $_POST['firstName'];//���������� � ��������� html � ����� 
$lastName = $_POST['lastName';
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

require_once "Mailer/PHPMailer.php";
require_once "Mailer/SMTP.php";
require_once "Mailer/Exception.php";

$mail = new PHPMailer();

try{
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'arturkhusnutdinov2@gmail.com';
	$mail->Password = '1235679048x';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('arturkhusnutdinov2@gmail.com', 'Builder');
	$mail->addAddress('art20012004@gmail.com.com', 'artur kh');

	$mail->isHTML(true);
	$mail->Subject = '������ � ��������� �����';
	$mail->Body = '���: ' . $firstName . '<br>�������: ' . $lastName . '<br>�������: ' . $tel . '<br>���������: ' . $message;
	$mail->AltBody = '������ ��� HTML';

	$mail->send();
	header->('Location: ../html1');
	} catch (Exception $e){
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>