<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard Template · Bootstrap v5.1</title>
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.css">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.rtl.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

  <link rel="stylesheet" href="./dashboard.css">

  <!--     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->
  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">

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



    .col-md-4 {

      width: 93.333333% !important;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../dashboard.css" rel="stylesheet">
</head>

<body>

  <?php
  require_once "../product/update_product.php";
  ?>

  <!-- HEADER -->
  <?php
  include '../include/header.php';
  ?>
  <?php
  require_once "../../database/config.php";
  ?>

  <div class="container-fluid">
    <div class="row">
      <!-- NAVIGATION -->
      <?php
      include '../include/nav.php';
      ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <?php
        // if (isset($_POST['add']))
        // {
        //     $prd_categoryID = $_POST['prd_category'];
        //     $prd_name = $_POST['prd_name'];
        //     $prd_description = $_POST['prd_description'];
        //     $prd_price = $_POST['prd_price'];
        //     $prd_quantity = $_POST['prd_quantity'];
        //     $prd_avatar = $_FILES['prd_avatar']['name'];
        //     $prd_avatar_tmp = $_FILES['prd_avatar']['tmp_name'];
        //     $path = './upload/';
        //     $prd_sizeID = $_POST['prd_size'];
        //     $sql_insert_product = mysqli_query($mysqli,"INSERT INTO products(category_id,product_name,product_description,product_price,product_quantity,size_id,product_image) VALUES ('$prd_categoryID','$prd_name','$prd_description','$prd_price','$prd_quantity','$prd_sizeID','$prd_avatar')");
        //     move_uploaded_file($prd_avatar_tmp,$path.$prd_avatar);
        // }

        // 
        ?>

        <?php

        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE product_id=$id";
        $ketqua = mysqli_query($mysqli, $sql);
        $product = mysqli_fetch_array($ketqua);
        ?>

        <form modelAttribute="products" method="post" action="./process_update_product.php" class="form-horizontal" enctype="multipart/form-data">
          <fieldset>
            <hidden path="id" />
            <!-- Form Name -->
            <legend>PRODUCTS</legend>
            <div class="form-group">
              <input type="hidden" name="product_id" value="<?php echo $id ?>">
            </div>
            <div style="width: 100%" class="form-group ">
              <label class="col-md-4 control-label" for="category">CATEGORY (required)</label>
              <?php
              $sql_danhmuc = mysqli_query($mysqli, "SELECT * FROM `categories`");
              ?>

              <div style="width: 93.333333% !important;" class="col-md-4">
                <select name="prd_category" class="form-control" id="category">
                  <?php
                  while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                  ?>
                    <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?>
                    </option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">PRODUCT NAME</label>
              <div style="width: 93.333333% !important;" class="col-md-4">
                <input value="<?php echo $product['product_name'] ?>" id="title" name="prd_name" placeholder="Product name" class="form-control input-md" type="text" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for="detailDescription">PRODUCT DESCRIPTION</label>
              <div style="width: 93.333333% !important;" class="col-md-4 text-des">
                <textarea value="<?php echo $product['product_description'] ?>" class="form-control" id="summernote" name="prd_description"></textarea>
              </div>
            </div>
            <script>
              $(document).ready(function() {
                $('#summernote').summernote();
              });
            </script>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Price">PRICE</label>
              <div style="width: 93.333333% !important;" class="col-md-4">
                <input value="<?php echo $product['product_price'] ?>" id="Price" name="prd_price" placeholder="Price" class="form-control input-md" type="text" />
              </div>
            </div>
            <!-- Text input phan nay` chua bàn đến-->
            <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="priceSale">PRICE SALE</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input path="prd_priceSale" id="priceSale" name="priceSale" placeholder="Price Sale"
                                    class="form-control input-md" type="text" />

                            </div>
                        </div> -->
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="brand">QUANTITY</label>
              <div style="width: 93.333333% !important;" class="col-md-4">
                <input value="<?php echo $product['product_quantity'] ?>" name="prd_quantity" placeholder="Quantity" class="form-control input-md" type="number" />
              </div>
            </div>
            <!-- phần thêm avatar   -->
            <!-- File Button -->

            <!-- sửa sau -->
            <div class="form-group">
                            <label class="col-md-4 control-label" for="avatar">Ảnh sản phẩm</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input id="avatarfile" name="prd_avatar" class="input-file" type="file" />
                            </div>
                        </div>

            <!-- Sale-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="brand">SALE</label>
              <div style="width: 93.333333% !important;" class="col-md-4">
                <input value="<?php echo $product['product_sale'] ?>" name="prd_sale" placeholder="%" class="form-control input-md" type="number" />
              </div>
            </div>
            <!-- Size sản phẩm -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Price">Size</label>
                <div style="width: 93.333333% !important;" class="col-md-4">
                    <input id="Price" name="prd_size" placeholder="Size" class="form-control input-md" type="text" />
                </div>
            </div>
            <!-- Button -->
            <br>
            <div class="form-group">
              <div class="col-md-4">
                <button id="singlebutton" name="add" class="btn btn-primary">
                  Edit
                </button>
              </div>
            </div>
          </fieldset>
        </form>
      </main>
    </div>
  </div>


  <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>
  <script src="dashboard.js"></script>
  <script src="dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
</body>

</html>