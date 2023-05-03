<?php 
	
	// checking if the form is submit
	if ( isset($_POST['submit']) ) {
		$name	= $_POST['name'];
		$email		= $_POST['email'];
        $tel = $_POST['tel'];
		$message	= $_POST['message'];

		$to	 		  = 'chathuraravishan73@gmail.com';
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<b>From:</b> {$name} <br>";
	  $email_body .= "<b> Phone Number:</b> {$tel}<br>";
		$email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);
		// $alert = '<script>alert("Message send successfully")</script>';
		// $alert1 = '<script>alert("Message not Sent!")</script>';

		if ( $send_mail_result ) {
			echo '<script>alert("Message send successfully")</script>';
		} else {
			echo'<script>alert("Message not Sent!")</script>';
		}
	}
 ?>