<?php
	use PHPMailer\PHPMailer\PHPMailer;

	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);

	$alert ='';

	if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
		
		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username ="forumbr63@gmail.com";
			$mail->Password ="admin123*";
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = '587';
			
			$mail->setFrom("forumbr63@gmail.com");
			$mail->addAddress("forumbr63@gmail.com");
		
			$mail->isHTML(true);
			$mail->Subject = 'Message Received (Contact Page)';
			$mail->Body = "<h3>Name : $name <br>Email: $email <br>Message: $message</h3>";
			
			$mail->send();
			$alert ='';
		
		} catch(Exception $e){
			$alert = '<div class="alert-error">
					<span>'.$e->getmessage().'</span>
					</div>';
	}
	}