<!doctype html>
<html lang="en">

<?php
include './include/head.php';
?>

<body>
    <?php require_once "../database/config.php" ?>
    <!-- HEADER -->
    <?php
    include './include/header.php';
    ?>

    <!-- xu ly hien thi order detail -->
    <?php

    $id = $_GET['id'];
    $sql_order_product = mysqli_query($mysqli, "SELECT * FROM `order_detail` WHERE order_id=$id");


    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- NAVIGATION -->
            <?php
            include './include/nav.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container-fluid">
                    <form class="form-inline" action="${base }/admin/saleOrderList/${saleOrder.id}" method="get">
                        <div class="d-flex flex-row justify-content-between mt-4">
                            <div class="d-flex flex-row">
                                <input type="hidden" id="page" name="page" class="form-control">
                                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search" value="" style="margin-right: 5px;">
                                <button type="submit" id="btnSearch" name="btnSearch" value="Search" class="btn btn-primary">Seach</button>
                            </div>
                        </div>


                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row_order_product = mysqli_fetch_array($sql_order_product)) {
                                ?>
                                    <?php
                                    $prd_id = $row_order_product['product_id'];
                                    $sql_product = mysqli_query($mysqli, "SELECT * FROM `products` WHERE product_id = $prd_id");
                                    $row_sql_product = mysqli_fetch_array($sql_product);
                                    ?>
                                    <tr>
                                        <th><?php echo $i++ ?></th>
                                        <td><?php echo $row_order_product['product_id'] ?></td>
                                        <td><img src="./upload/<?php echo $row_sql_product['product_image'] ?>" alt="" width="100" height="100"></td>
                                        <td><?php echo $row_sql_product['product_name'] ?></td>
                                        <td><?php echo $row_order_product['quantity'] ?></td>
                                        <td><?php echo number_format($row_sql_product['product_price']) ?>đ</td>
                                        <td><?php echo number_format($row_sql_product['product_price'] * $row_order_product['quantity']) ?></td>
                                        <td>
                                            <!-- <a class="btn btn-primary" href="" role="button">Detail</a> -->
                                            <!-- <a class="btn btn-danger" href="" role="button">Delete</a> -->
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- Paging -->
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div id="paging"></div>
                            </div>
                        </div>

                    </form>

                </div>
            </main>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="${base}/js/jquery.simplePagination.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="${base}/js/dashboard.js"></script>

    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
</body>

</html>