<?php
$hasError = false;
$sent = false;

if(isset($_POST['submitform'])){
	$fname = trim(htmlspecialchars($_POST['fname'], ENT_QUOTES));
	$lname = trim(htmlspecialchars($_POST['lname'], ENT_QUOTES));
	$phone = $_POST['phone'];
	$email = trim($_POST['email']);
	$mess = trim(htmlspecialchars($_POST['mess'], ENT_QUOTES));

	$fieldsArray = array(
		'fname' => $fname,
		'lname' => $lname,
		'phone' => $phone,
		'email' => $email,
		'mess' => $mess
	);

	$errorArray = array();

	foreach ($fieldsArray as $key => $val) {
		switch ($key) {
			case 'fname':
			case 'lname':
			case 'phone':
				if(empty($val)){
					$hasError = true;
					$errorArray[$key] = ucfirst($key)." field was left empty.";
				}
				break;
			case 'email':
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$hasError = true;
					$errorArray[$key] = "Invalid Email Address Entered";
				}else{
					$email = filter_var($email, FILTER_VALIDATE_EMAIL);
				}
				break;	
		}
	}

	if($hasError !== true){
		$to = "email@gmail.com";
		$subject = "New car reservation";
		$msgcontents = "Name: $fname<br/>Last Name: $lname<br/>Phone: $phone<br/>Email: $email<br/>Comments: $message";
		$emailsent = mail($to, $subject, $msgcontents);
		if($mailsent){
			$sent = true;
			unset($fname);
			unset($lname);
			unset($phone);
			unset($email);
			unset($mess);
		}
	}
}
?>