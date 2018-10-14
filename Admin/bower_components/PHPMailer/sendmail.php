<?php 
    include('PHPMailerAutoload.php');// Retrieve the email template required 
    $message = file_get_contents('sample_mail.html'); 
    $mail = new PHPMailer(); $mail->IsSMTP(); // This is the SMTP mail server 

    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'kingandicatering@gmail.com'; 
    $mail->Password = 'teamada2018'; 
    $mail->SetFrom('kingandicatering@gmail.com', 'King and I'); 
    $mail->AddAddress('jaysonaguila16@gmail.com'); 
    $mail->Subject = 'Your account information';
    $mail->MsgHTML($message);
    $mail->IsHTML(true); 
    $mail->CharSet="utf-8";
    //$mail->AltBody(strip_tags($message)); 
    if(!$mail->Send()) {  
    echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    ?>