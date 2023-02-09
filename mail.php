<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;

 require './PHPMailer-master/src/Exception.php';
 require './PHPMailer-master/src/PHPMailer.php';
 require './PHPMailer-master/src/SMTP.php';
 require './PHPMailer-master/src/OAuthTokenProvider.php';
 require './PHPMailer-master/src/OAuth.php';
 require './PHPMailer-master/src/POP3.php';
class Mailer{
    public function sendMail($email,$code){
        $mail = new PHPMailer(false);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = "hoangdangduong2001@gmail.com";
            $mail->Password = 'upnkhhyrsiaefvzt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            //Send Email
            $mail->setFrom('hoangdangduong2001@gmail.com');

            //Recipients
            $mail->addAddress("$email");

            //Content
            $mail->isHTML(true);
            $mail->CharSet="UTF-8";
            $mail->Subject = "Thông báo tới khách hàng";
            $mail->Body    = "Mã xác nhận mật khẩu là: ".$code;

            $mail->send();

            $_SESSION['result'] = 'Message has been sent';
            $_SESSION['status'] = 'ok';
        } catch (Exception $e) {
            $_SESSION['result'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            $_SESSION['status'] = 'error';
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
        }
    }