<?php

if (! isset($_POST['g-recaptcha-response'])) {
	echo "captcha";
	return;
}

// configuracion en google: https://www.google.com/recaptcha/admin#site/342353592
// owners: m.moyano@mas54.com y s.gutierrez@mas54.com

// $secret = '6Le45mcUAAAAAIwHKoaMDsUBAXi4G4Ix916ZhtWc';
$secret = '6LcaxWgUAAAAAGPyl8mYxK1bMA98YB6wvoBi33LY';
$captcha = $_POST['g-recaptcha-response'];

$fields = array(
    'secret'    =>  $secret,
    'response'  =>  $captcha,
    'remoteip'  =>  $_SERVER['REMOTE_ADDR']
);
$ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
$response = curl_exec($ch);
$responseData = json_decode($response);
curl_close($ch);

if(!$responseData->success) {
	echo "captcha";
	return;
}

// Put contacting email here
$php_main_email = "vagnerlove_1990@mail.ru";


//Fetching Values from URL
$php_name = $_POST['ajax_name'];
$php_email = $_POST['ajax_email'];
$php_message = $_POST['ajax_message'];
$php_subject1 = $_POST['ajax_subject'];


//Sanitizing email
$php_email = filter_var($php_email, FILTER_SANITIZE_EMAIL);


//After sanitization Validation is performed
if (filter_var($php_email, FILTER_VALIDATE_EMAIL)) {
	
	
		$php_subject = "Message from contact form";
		
		// To send HTML mail, the Content-type header must be set
		$php_headers = 'MIME-Version: 1.0' . "\r\n";
		$php_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$php_headers .= 'From:' . $php_email. "\r\n"; // Sender's Email
		$php_headers .= 'Cc:' . $php_email. "\r\n"; // Carbon copy to Sender
		
		$php_template = '<div style="padding:50px;">Hello ' . $php_name . ',<br/>'
		. 'Thank you for contacting us.<br/><br/>'
		. '<strong style="color:#f00a77;">Name:</strong>  ' . $php_name . '<br/>'
		. '<strong style="color:#f00a77;">Email:</strong>  ' . $php_email . '<br/>'
		. '<strong style="color:#f00a77;">Subject:</strong>  ' . $php_subject1 . '<br/><br/>'
		. '<strong style="color:#f00a77;">Message:</strong>  ' . $php_message . '<br/><br/>'
		. 'This is a Contact Confirmation mail.'
		. '<br/>'
		. 'We will contact you as soon as possible .</div>';
		$php_sendmessage = "<div style=\"background-color:#f5f5f5; color:#333;\">" . $php_template . "</div>";
		
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$php_sendmessage = wordwrap($php_sendmessage, 70);
		
		// Send mail by PHP Mail Function
		mail($php_main_email, $php_subject, $php_sendmessage, $php_headers);
		echo "";
	
	
} else {
	echo "<span class='contact_error'>* Invalid email *</span>";
}

?>