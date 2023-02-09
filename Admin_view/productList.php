<html lang="en">

<?php
include './include/head.php';
?>

<body>
  <?php
  require_once "../database/config.php";
  ?>
  <!-- HEADER -->
  <?php
  include './include/header.php';
  ?>

  <div class="container-fluid">
    <div class="row">
      <?php
      include './include/nav.php';
      ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="container-fluid">

          <form class="form-inline" action="" method="get" modelAttribute="products">
            <div class="d-flex flex-row justify-content-between mt-4">
              <div class="d-flex flex-row">
                <input type="hidden" id="page" name="page" class="form-control">
                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search" value=""
                  style="margin-right: 5px;">
                <select class="form-control" name="categoryId" id="categoryId" style="margin-right: 5px;">
                  <option>Tất cả</option>
                  <c:forEach items="" var="category">
                    <option value=""></option>
                  </c:forEach>
                </select>
                <button type="submit" id="btnSearch" name="btnSearch" value="Search"
                  class="btn btn-primary">Seach</button>
              </div>
              <div>
                <a class="btn btn-outline-primary mb-1" href="./addproduct.php" role="button">Add
                  New</a>
              </div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">Category</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Avatar</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql_product = mysqli_query($mysqli, "SELECT * FROM `products`");
                ?>

                <?php
                $i = 1;
                while ($row_product = mysqli_fetch_array($sql_product)) {
                ?>
                <tr>

                  <td><?php echo $i++; ?></td>

                  <td><?php echo $row_product['product_name'] ?> </td>
                  <td><?php echo $row_product['product_price'] ?> </td>
                  <td><?php echo $row_product['category_id'] ?> </td>
                  <td><?php echo $row_product['product_quantity'] ?> </td>

                  <td>
                    <img width="100" src="./upload/<?php echo $row_product['product_image'] ?>">

                  </td>
                  <td>

                    <a class="btn btn-primary"
                      href="./product/update_product.php?id=<?php echo $row_product['product_id'] ?>"
                      role="button">Edit</a>
                    <a class="btn btn-danger"
                      href="./product/delete_product.php?id=<?php echo $row_product['product_id'] ?>"
                      onclick="return confirm('Bạn có muốn xóa <?php echo $row_product['product_name'] ?>?')"
                      role="button">Delete</a>
                  </td>
                </tr>

                <?php
                }
                ?>
              </tbody>
            </table>
            <div class="text-center">
              <a href="data_export_product.php" class="btn btn-primary" target="_blank">Export data</a>
            </div>
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
  <script type="text/javascript" src=""></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="./dashboard.js"></script>
  <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>
  <script src="${base}/jsdashboard.js"></script>


  <script type="text/javascript">
  </script>
  <script type="text/javascript" src="${base}/js/jquery.js"></script>
</body>

</html>