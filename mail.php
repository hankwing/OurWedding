<?php
header("Content-Type: text/html; charset=utf-8");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $to = "hankwing@hotmail.com"; // this is your Email address
    $sender_name = $_POST['name'];
    $number_of_gustes = $_POST['guest'];
    $events = $_POST['events'];
    $phone = $_POST['email'];
    $notes = $_POST['notes'];
    $subject = "婚礼参加信息";
    $message = $sender_name . " 参加婚礼! \n人数为: " .  $number_of_gustes . " \n是否需要住宿: " . $events . "\n联系方式:\n".
     $phone . "\n留言： " . $notes;

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->CharSet='UTF-8';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '515346515@qq.com';                 // SMTP username
    $mail->Password = 'kzedwptenmiybhce';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('515346515@qq.com', 'Mailer');
    $mail->addAddress('hankwing@hotmail.com', 'hankwing');     // Add a recipient
    $mail->addAddress('515346515@qq.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('dahu92615@163.com');
    //$mail->addBCC('dahu92615@163.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}