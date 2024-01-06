<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.titan.email';                       // Host SMTP Server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@nexttowntech.com.pg';           // Sender Email
    $mail->Password = 'info@ntt_#2023';                     // Email Pwd
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';                                    //Port Number
    
    $mail->setFrom('info@nexttowntech.com.pg');        // Sender Email

    $mail->addAddress("vvolsavai@nexttowntech.com.pg");       // Receiver Email
    $mail->isHTML(true);
    $mail->Subject = "Contact From Submission -  ".$_POST["subject"];     // Email Subject
    $mail->Body =                             //$_POST["message"];        // Email Body
    "
    <html lang='en'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>  
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

            <style type='text/css'>
                .img-wrapper {
                    background-color: dodgerblue;
                }

                .form-info {
                    width: 75%; 
                    margin: 0 auto;
                }

                h1 {
                    margin: 0; 
                    padding: 10px 0 0 5px;
                }

                h4 {
                    font-size: 16px;
                    border-bottom: 2px solid darkgrey; 
                    border-radius: 3px; 
                }

                @media (max-width: 575.98px){
                    .form-info {
                        width: 90%;
                    }

                    h1 {
                        font-size: 14px;
                    }

                    h4 {
                        font-size: 12px;
                    }
                }
            </style>

        </head>
        <body style='height: 100vh; padding: 0; font-family: sans-serif;'>
            <div style='height: 90px;'>
                <div class='img-wrapper' style='height: 100%;'>
                    <img src='https://custom.nexttowntech.com.pg/static/ntt-logo.gif' height='80%' style='padding: 5px;'/>
                </div>
            </div>

            <div style='min-height: 500px; padding: 0 20px 20px 20px;  margin: 0; border: 1px solid antiquewhite; background-color: antiquewhite;'>
                <div class='form-info'>
                    <h1 style='margin: 10px 0 0 0;'>Contact Form Submission</h1>
                    <hr/>
                    <div>
                        <label style='display: block; margin-top:15px;'>Name</label>
                        <h4 style='min-height: 20px; font-weight: 400;'>".$_POST['name']."</h4>
                        <label style='display: block; margin-top:15px;'>Phone</label>
                        <h4 style='min-height: 20px; font-weight: 400;'>".$_POST['phone']."</h4>
                        <label style='display: block; margin-top:15px'>Email</label>
                        <h4 style='min-height: 20px; font-weight: 400;'>".$_POST['email']."</h4>
                        <label style='display: block; margin-top:15px'>Subject</label>
                        <h4 style='min-height: 20px; font-weight: 400;'>".$_POST['subject']."</h4>
                        <label style='display: block; margin-top:15px'>Message</label>
                        <h4 style='min-height: 20px; font-weight: 400;'>".$_POST['message']."</h4>
                    </div>
                </div>
            </div>
        </body>
    </html>
    ";

    $mail->send();

    echo
    "
    <script>
    document.location.href = '".$_POST['page']."';
    alert('Sent Successfully');
    </script>
    ";
}
?>