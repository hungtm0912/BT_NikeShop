<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="./forgotpass.css">
    <title>Nike Shop</title>
    <link rel="icon" href="./image/logoshop.png" type="image/icon type">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<?php
$loi = "";
if (isset($_POST['nutguiyeucau']) ==true) {
        $email = $_POST['email'];
        $conn = new PDO("mysql:host=localhost;dbname=nike_shop;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);   //Tạo 1 prepare statement
        $stmt->execute( [$email] );
        $count = $stmt->rowCount();
        if ($count==0){
            $loi = "Email bạn nhập chưa đăng ký";
        }
        else {
            $matkhaumoi = substr(md5(rand(0,999999)) ,0 ,6);
            $sql = "UPDATE `users` set `password` = ? WHERE `email` = ?";
            $stmt = $conn->prepare($sql);   //Tạo 1 prepare statement
            $stmt->execute( [$matkhaumoi, $email ] );
            //echo "Đã cập nhật";
            $kq = GuiMatKhauMoi($email, $matkhaumoi);      
        }
    }
?>
<?php
function GuiMatKhauMoi($email, $matkhau) {
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'webnikeshop123@gmail.com'; // SMTP username
        $mail->Password = 'ahntblznsjqeysty';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom($email, 'Admin' ); 
        $mail->addAddress( $email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Gửi lại mật khẩu';
        $noidungthu = "<p>Yêu cầu mật khẩu mới từ Website NikeShop</p>
            Mật khẩu mới của bạn là {$matkhau}"; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
            echo "Đã Gửi Mail";
    } catch (Exception $e) {
    }
}
?>
<body class="text-center">
    <main class="form-forgot">
        <form method="POST" action="">
            <img class="mb-4" src="./image/logoshop.png" alt="" width="200" height="160">
            <h1 class="h3 mb-3 fw-normal">Lấy Lại Mật Khẩu</h1>
            <div class="form-floating">
                <input type="email" class="form-control" placeholder="Nhập Email" id="email" name="email">
                <label for="floatingInput">Nhập Email</label>
            </div>
            <br>
            <button type="submit" name="nutguiyeucau" value="nutgui" class="btn btn-primary mt-3">Gửi Yêu Cầu</button>  
        </form>
        <p class="text-center" style="margin-top:8px">Bạn Chưa Có Tài Khoản ? <a href="./signup">Đăng Ký</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </main>
</body>
</html>