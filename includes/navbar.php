<div class="row header">
  <div class="row head">
    <div class="col-12 nav-item dropdown nav-custom">
      <a class=" col-2 nav-link dropdown-toggle nav-custom" href="#" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user"></i> 
        <?php
             if (isset($_SESSION['username'])) {
                   echo $_SESSION['name'];
             } else {
                     echo 'Tài khoản';
              }
          ?>
      </a>
      <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
        <?php
        if (!isset($_SESSION['username'])) {
          echo '<a class="dropdown-item dropdown-item-custom" href="./signup">Đăng Ký</a>';
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
        }
        ?>
        <?php
        if (!isset($_SESSION['username'])) {
          echo '<a class="dropdown-item dropdown-item-custom" href="./signin">Đăng Nhập</a>';
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
        }
        ?>
        <a class="dropdown-item dropdown-item-custom" href="#">Giỏ Hàng</a>
        <div class="dropdown-divider margin: 3px 0;"></div>
        <a class="dropdown-item dropdown-item-custom" href="#">Thanh Toán </a>
        <div class="dropdown-divider margin: 3px 0;"></div>
        <?php
        if (!isset($_SESSION['username'])) {
          echo '<a class="dropdown-item dropdown-item-custom" href="./signin">Tra Cứu Đơn Hàng </a>';
        } else {
          echo '<a class="dropdown-item dropdown-item-custom" href="./uidonhang.php">Tra Cứu Đơn Hàng </a>';
        }
        ?>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
          echo '<a class="dropdown-item dropdown-item-custom" href="./signout">Đăng Xuất</a>';
        }
        ?>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
          echo '<a class="dropdown-item dropdown-item-custom" href="./view_user">Thông Tin Tài Khoản</a>';
        }
        ?>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
          echo '<a class="dropdown-item dropdown-item-custom" href="./Admin_view">Quản Lý</a>';
        }
        ?>
      </div>
    </div>
  </div>
  <div class="row col-12 logo-search-cart">
    <div style="justify-content: end !important;" class="col-3 logo">
      <img width="30%" src="./image/logoshop.png" alt="" style="margin-left: 100px">
    </div>

    <div class="col-6">
      <form action="" method="GET">
        <div class="input-group mb-3 mt-3">
          <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Recipient's username" value=""
            name="search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <?php
    $items = 0;

    if (isset($_SESSION['items']))
      $items = $_SESSION['items'];
    ?>
    <?php
    if (!isset($_SESSION['username'])) { ?>
    <div class="col-3 py-3 cart-icon">
      <p class="items-cart" style="display: none;"></p>
      <a href="./signin" style="color:#fff !important;"><i style="font-size: 24px !important;"
          class="fas fa-shopping-cart"></i></a>
    </div>
    <?php } else { ?>
    <div class="col-3 py-3 cart-icon">
      <p class="items-cart"><?php echo $items ?></p>
      <a href="./cart.php" style="color:#fff !important;"><i style="font-size: 24px !important;"
          class="fas fa-shopping-cart"></i></a>
    </div>
    <?php } ?>
  </div>

  <div class="row col-12 mb-3">
    <ul style="margin: auto;" class="nav ">
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="./trangchu.php">Trang Chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Về Chúng Tôi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="./index.php">Tất Cả Sản Phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Hướng Dẫn Mua Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Khách Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Liên Hệ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom sale-off" href="#">Sale off</a>
      </li>
    </ul>
  </div>
</div>