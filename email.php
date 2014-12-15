<?php 

	require ('SMTPClass.php');

	$to        =   "emailId@domain.com";        // To address
	$subject   =   "Email Subject";            // Email Subject
	$body      =   "Mail Body";                   // Email Nody
	
	$SMTPMail = new SMTPClient($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
	$SMTPMail->SendMail();

?>
