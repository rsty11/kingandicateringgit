<?php

	include('../../../config.php');

    require ('../../bower_components/PHPMailer/PHPMailerAutoload.php'); 




        if(isset($_GET["submit"]))
        {

             $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES['file']['name']);

            
            
    $sendto=$_GET['sendto'];
    $subj=$_GET['subj'];
    $emailmsg=$_GET['emailmsg'];

    $message = ($emailmsg); 
    $mail = new PHPMailer(); $mail->IsSMTP(); // This is the SMTP mail server 

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'kingandicatering@gmail.com'; 
    $mail->Password = 'teamada2018'; 
    $mail->SetFrom('kingandicatering@gmail.com', 'King & I Events and Catering'); 
    $mail->AddAddress($sendto); 
    $mail->Subject = ($subj);
    $mail->Body($message);
    $mail->IsHTML(false);
    $mail->CharSet="utf-8";

    $mail->AddAttachment($uploadfile);
            
    //$mail->AltBody(strip_tags($message)); 
    if(!$mail->Send()) {
      echo '<script>alert("Oops! Something is wrong. Please try again!");</script>';  
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo '<script>alert("Your message is sent successfully!");
            self.close();
        </script>';
    }}
        
    ?>