<?php 
    // $error_name = "";
    // $error_pass = "";  

    // if ( isset( $_POST["dangnhap"] ) ) {
    //     if(empty($_POST["user"])){
    //          $error_name = "Không được để trống";
    //     }
    // }

?>
<div class="b">
    <h1>Tài khoản</h1>
    <form action="index.php?act=dangnhap" method="post">
        Tên đăng nhập <br>
        <input type="text" name="user" class="a" >
        <span style="color:red" ><?php echo $error_name ?></span>
        <br>
        Mật khẩu <br>
        <input type="password" name="pass" class="a"><br>
        <span style="color:red" ><?php echo $error_pass ?></span>
        <input type="submit" value="đăng nhập" name="dangnhap" class="c">
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </h2>
        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
    </form>
</div>

<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
    ?>
    xin chào <br>
    <?= $user ?>
    <div class="mb">
        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=edit_taikhoan">cập nhật tai khoan</a></li>
        <?php if ($role == 1) { ?>
            <li><a href="admin/index.php">Đăng nhập admin</a></li>
        <?php } ?>
        <li><a href="index.php?act=thoat">Thoat</a></li>
        <?php
} else {
}
?>
    <style>
        h1 {
            margin: 5px 0;
            text-align: center;
        }

        form {
            line-height: 2;
            margin: 0 60px;
        }

        form .a {
            width: 90%;
            height: 30px;
        }

        .b {
            margin: 20px 450px;
            border: 1px solid #cccc;
        }

        .c {
            margin-left: 60px;
            width: 100px;
            height: 30px;
        }
    </style>