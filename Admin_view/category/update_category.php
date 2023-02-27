<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Shop</title>
    <link rel="icon" href="./image/logoshop.png" type="image/icon type">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.css" />
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.rtl.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet" />
</head>
<body>
    <?php require_once "../../connect.php"
     ?>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/update_category.php">Bảng Thống Kê</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Nhập thông tin cần tìm" aria-label="Search" />
        <div class="navbar-nav">
            <div class="nav-item text-nowrap"><a class="nav-link px-3" href="../trangchu.php">Thoát</a></div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><span data-feather="home"></span>Bảng Điều Khiển</a>
                        </li>
                        <li class="nav-item sub">
                            <a class="nav-link" href="/update_category.php"><span data-feather="file"></span>Đơn Đặt Hàng</a>
                            <ul class="sub-menu">
                                <li class="nav-item"><a class="nav-link" href="./saleOrderList.php">Danh Sách Đơn Hàng </a></li>
                            </ul>
                        </li>
                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="./update_category.php"> <span data-feather="shopping-cart"></span> Sản Phẩm</a>
                            <ul class="sub-menu">
                                <li class="nav-item"><a class="nav-link" href="./addproduct.php"> Thêm Sản Phẩm</a></li>
                                <li class="nav-item"><a class="nav-link" href="./productList.php"> Danh Sách Sản Phẩm</a></li>
                            </ul>
                        </li>
                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="/update_category.php"><span data-feather="shopping-cart"></span>Danh Mục</a>
                            <ul class="sub-menu">
                                <li class="nav-item"><a class="nav-link" href="./addcategory.php"> Thêm Danh Mục</a></li>
                                <li class="nav-item"><a class="nav-link" href="./categoryList.php"> Danh Sách Danh Mục</a></li>
                            </ul>
                        </li>
                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="/update_category.php">
                                <span data-feather="users"></span>Khách Hàng</a>
                            <ul class="sub-menu">
                                <li class="nav-item"><a class="nav-link" href="./contactList"> Danh Sách Liên Hệ</a></li>
                                <li class="nav-item"><a class="nav-link" href="./userList.php"> Danh Sách Khách Hàng</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="bar-chart-2"></span> Phản Hồi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="layers"></span>Tích Hợp</a></li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Lưu Phản Hồi</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span></a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="file-text"></span>Trung Bình/Tháng</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="file-text"></span>Quý trước</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="file-text"></span>Tương tác </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span data-feather="file-text"></span> Giảm Giá Cuối Năm</a></li>
                    </ul>
                </div>
            </nav>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM categories WHERE category_id=$id";
                $ketqua = mysqli_query($connect,$sql);
                $category = mysqli_fetch_array($ketqua);
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form modelAttribute="category" method="post" action="./process_updatecategory.php"
                    class="form-horizontal">
                    <fieldset>
                        <sf:hidden path="id" />
                        <!-- Form Name -->
                        <legend>Danh Mục</legend>
                        <!-- Text input-->
                        <div class="form-group"><input type="hidden" name="category_id" value="<?php echo $id ?>"></div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">Tên Danh Mục</label>
                            <div style="width: 93.333333% !important" class="col-md-4">
                                <input path="name" id="name" name="category_name" placeholder="Nhập Tên Danh Mục"
                                    value="<?php echo $category['category_name']?>" class="form-control input-md"
                                    type="text" />
                            </div>
                        </div>
                        <script>
                        $(document).ready(function() {
                            $("#summernote").summernote();
                        });
                        </script>
                        <!-- Button -->
                        <br>
                        <div class="form-group"><div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Sửa</button></div>
                        </div>
                    </fieldset>
                </form>
            </main>
        </div>
    </div>
    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="./dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
</body>

</html>