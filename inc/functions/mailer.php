<?php
if ($_POST) {
	$emailSubject 	= $_POST['subject'];
	$webmaster 	= "fredbradley@me.com";
	
	$nameField	= $_POST['fromname'];
	$emailField	= $_POST['fromemail'];
	$questionField 	= $_POST['email'];

	$body = <<<EOD
		$nameField has posted as message from the Whos On Heart admin panel<br>
<br>
		Message: $questionField<br>
EOD;
	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";

	$success = mail($webmaster, $emailSubject, $body, $headers);

	header("Location: http://".$_SERVER['SERVER_NAME']."/admin?emailSent");
} else {
	header("Location: http://".$_SERVER['SERVER_NAME']."/admin?error");

}
?>
