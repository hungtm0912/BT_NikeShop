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
            $mail->Username = "root";
            $mail->Password = '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            //Send Email
            $mail->setFrom('huyngo9981@gmail.com');

            //Recipients
            $mail->addAddress("$email");

            //Content
            $mail->isHTML(true);
            $mail->CharSet="UTF-8";
            $mail->Subject = "Thông báo tới khách hàng";
            $mail->Body    = "Mã xác nhận mật khẩu là: ".$code;

            $mail->send();

            $_SESSION['result'] = 'Tin nhắn đã được gửi';
            $_SESSION['status'] = 'Ok';
        } catch (Exception $e) {
            $_SESSION['result'] = 'Không thể gửi tin nhắn. Lỗi: ' . $mail->ErrorInfo;
            $_SESSION['status'] = 'error';
            echo 'Không thể gửi tin nhắn. Lỗi: ' . $mail->ErrorInfo;
        }
        }
    }