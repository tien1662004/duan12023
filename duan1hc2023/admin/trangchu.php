<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="../trangto/css/main.css" /> -->
  <title>TAM FOOD</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="menu">
        <h2>Admin</h2>
        <!-- <img src="../trangto/image/logo.png" class="logo" /> -->
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="index.php?act=adddm">danh mục</a></li>
          <li><a href="index.php?act=addsp">San pham</a></li>
          <li><a href="index.php?act=dskh">khách hàng</a></li>
          <li><a href="index.php?act=dsbl">bình luận </a></li>
          <li><a href="index.php?act=dsdh">Quản lý đơn hàng</a></li>
          <li><a href="index.php?act=tk">thống kê</a></li>
        </ul>
        <!-- <form action="POST" class="seach">
          <input type="text" placeholder="Tìm kiếm..." />
        </form> -->
        <div class="icon">
          <a href="#"><i class="fa-regular fa-user fa-xl" style="color: #ffff"></i></a>
          <a href=""><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffff"></i></a>
        </div>
      </div>
      <!-- <h1> Chào mừng bạn đến với giao điện quản lý ADMIN</h1> -->
    </header>

    <style>
      h2 {
        border: 2px solid #cccccc;
      }
      h1{
        margin-top: 70px;
        text-align: center;
      }
      .menu ul {
        background-color: antiquewhite;
        display: flex;
      }

      .menu ul li {
        padding: 30px;
        list-style: none;
      }

      .menu ul li a {
        font-size: 20px;
        color: #000000;
        text-decoration: none;
      }
    </style>