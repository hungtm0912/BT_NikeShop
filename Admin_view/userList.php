<html lang="en">

<link rel="stylesheet" href="./user/styles_user.css">
<?php
include './include/head.php';
?>

<body>
  <?php
  require_once "../database/config.php";
  ?>
  <?php
  include './include/header.php';
  ?>
  <div class="container-fluid">
    <div class="row">
      <?php
      include './include/nav.php';
      ?>
      <?php
      if (isset($_GET['success']) && $_GET['success']) {
        echo '<script type="text/javascript">alert("Sửa thông tin người dùng thành công!!!");</script>';
      }

      if (isset($_GET['success_del']) && $_GET['success_del']) {
        echo '<script type="text/javascript">alert("Xóa người dùng thành công!!!");</script>';
      }
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
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM `users`";
                $result = $mysqli->query($sql);
                ?>
                <!-- https://bootdey.com/img/Content/avatar/avatar7.png -->
                <?php
                $i = 1;
                while ($row_user = $result->fetch_assoc()) {
                ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><a href="user/update_user.php?id=<?php echo $row_user['user_id'] ?>">
                      <img width="60" height="60"
                        src="/PhuongNamSport/Admin_view/upload/user/<?php echo $row_user['avatar'] ?>" class="avatar"
                        alt="Avatar" />
                      <?php echo $row_user['username'] ?></a>
                  </td>
                  <td><?php echo $row_user['email'] ?> </td>
                  <td><?php echo $row_user['role'] == 1 ? 'Admin' : 'User' ?>
                  </td>
                  <td><span class="status text-success">&bull;</span><?php echo "Active" ?> </td>
                  <td>
                    <a class="btn btn-primary" href="./user/update_user.php?id=<?php echo $row_user['user_id'] ?>"
                      role="button">Edit</a>
                    <a class="btn btn-danger"
                      href="./user/process_user.php?id_delete=<?php echo $row_user['user_id'] ?>"
                      onclick="return confirm('Bạn có muốn xóa <?php echo $row_user['username'] ?>?')"
                      role="button">Delete</a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </form>
        </div>
      </main>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src=""></script>
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