<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="./forgotpass.css">
    <title>Nike Shop</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<?php
    session_start();
    require_once "./database/config.php";
    if(isset($_POST['code'])){
        $code = $_POST['code'];
        if($code != $_SESSION['code']){
            echo '<script type="text/javascript">alert("Mã xác nhận không hợp lệ!");</script>';
        }
        else {
            header('location:./resetpass.php');
        }
    }
?>
<body class="text-center">
    <main class="form-forgot">
        <form method="POST" action="">
            <img class="mb-4" src="./image/logoshop.png" alt="" width="200" height="160">
            <h1 class="h3 mb-3 fw-normal">Nhập mã xác nhận</h1>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Enter code" id="code" name="code">
                <label for="floatingInput">Nhập Code</label>
            </div>
            <br>
            <button class="w-60 btn btn-primary" type="submit" name="signin">Xác nhận</button>
        </form>
        <p class="text-center" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="./signup">Đăng ký</a> </p>
        <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </main>
</body>

</html>