<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="trangto/css/main.css" />
  <title>TAM FOOD</title>
</head>
<style>
  header {
    width: 100%;
    height: 100vh;
    font-size: 20px;
    background-image: url('trangto/image/banner.png');
    background-size: cover;
    background-position: center;
  }
</style>

<body>
  <div class="container">
    <header>
      <div class="menu">
        <img src="trangto/image/logo.png" class="logo" />
        <ul>
          <li><a href="index.php?act=home">Trang Chủ</a></li>
          <li><a href="index.php?act=sanpham">Sản Phẩm</a></li>
          <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
          <li><a href="index.php?act=footer">Giới Thiệu</a></li>
        </ul>
        <!-- <form action="index.php?act=chitietsp" class="seach" method="post">
          <input type="text" name="kyw" placeholder="Tìm kiếm..." />
        </form> -->
        <div class="icon">
          <a href="index.php?act=dangnhap"><i class="fa-regular fa-user fa-xl" style="color: #ffff"></i>
            <?php
            if (isset($_SESSION['user'])) {
              extract($_SESSION['user']);
              ?>
              xin chào <br>
              <?= $user ?>
              <?php
            } else {
            }
            ?>
          </a>
          <a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffff"></i></a>
        </div>
      </div>
    </header>