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
            $matkhaumoi = substr( md5(rand(0,999999)) ,0 ,8);
            $sql = "UPDATE users set password = ? WHERE email = ?";
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
        $mail->Username = 'hungk18.hvu@gmail.com'; // SMTP username
        $mail->Password = '0984427570hung';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('hungk18.hvu@gmail.com', 'Hùng' ); 
        $mail->addAddress( $email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Gửi lại mật khẩu';
        $noidungthu = "<p>Yêu cầu mật khẩu mới từ Website BT_NikeShop</p>
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
        return true;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
<form method="post" style="width: 600px;" class="border border-primary border-2 m-auto p-3">
  <h4 class="form-group mb-3 text-center">
    QUÊN MẬT KHẨU
  </h4>
  <?php if ($loi!="") {?>
    <div class="alert alert-danger"><?=$loi?></div>
  <?php } ?>
  <div class="form-group mb-3">
    <label for="email" class="form-label">Nhập Email</label>
    <input value="<?php if (isset($email)==true) echo $email?>" type="email" class="form-control" id="email" name="email" placeholder="Enter email">
</div>
  <button type="submit" name="nutguiyeucau" value="nutgui" class="btn btn-primary mt-3">Gửi yếu cầu</button>
</form>