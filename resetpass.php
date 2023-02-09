<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="./forgotpass.css">
    <title>Reset password</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<?php
    session_start();
    require_once "./database/config.php";
    if(isset($_POST['password']) && isset($_POST['re_password'])){
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        if($password != $re_password){
            echo '<script type="text/javascript">alert("Mật khẩu nhập lại chưa đúng");</script>';
        }else {
            $email = $_SESSION['email_resetpass'];
            $hash_pass = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE users SET password = '$hash_pass' WHERE email = '$email'";
            $mysqli->query($sql);
            echo '<script type="text/javascript">alert("Cập nhật thành công!");</script>';
            header('location:./signin');
        }
    }
?>

<body class="text-center">
    <main class="form-forgot">
        <form method="POST" action="">
            <img class="mb-4" src="./image/Free_Sample_By_Wix__1_-removebg-preview.png" alt="" width="200" height="160">
            <h1 class="h3 mb-3 fw-normal">Nhập mật khẩu mới</h1>

            <div class="form-group input-group">
                <input path="password" name="password" class="form-control" placeholder="Create new password"
                    type="password" required />
            </div>
            <br>
            <div class="form-group input-group">
                <input class="form-control" name="re_password" placeholder="Repeat password" type="password" required />
            </div>
            <br>
            <button class="w-60 btn btn-primary" type="submit" name="signin">Đổi mật khẩu</button>
        </form>
        <p class="text-center" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="./signup">Đăng ký</a> </p>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </main>
</body>

</html>