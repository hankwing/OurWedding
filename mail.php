<?php
	$to = "hankwing@hotmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$number_of_gustes = $_POST['guest'];
	$events = $_POST['events'];
	$notes = $_POST['notes'];
    echo "我的第一段 PHP 脚本！";
	$subject = "Form submission";
	$message = $sender_name . " is attending! The number of gustes of his / her is : " .  $number_of_gustes . " and his / her selected event is " . $events . ". He / she worte the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>