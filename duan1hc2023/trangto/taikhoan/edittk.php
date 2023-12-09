<h1>Cập nhật tài khoản</h1>

<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}
?>
<form action="index.php?act=edit_taikhoan" method="post">
    Email <br>
    <input type="email" name="email" value="<?= $email ?>" class="a"><br>
    <span style="color:red" ><?php echo $error_email ?></span><br>
    Tên đăng nhập <br>
    <input type="text" name="user" value="<?= $user ?>" class="a"><br>
    <span style="color:red" ><?php echo $error_name ?></span><br>
    Mật khẩu <br>
    <input type="password" name="pass" value="<?= $pass ?>" class="a"><br>
    <span style="color:red" ><?php echo $error_pass ?></span><br>
    <!-- Địa chỉ <br>
    <input type="text" name="address" value="<?= $address ?>" class="a"><br>
    Điện thoai <br> -->
    <!-- <input type="text" name="tel" value="<?= $tel ?>" class="a"><br> -->
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" name="capnhat" value="cập nhật">
    <input type="reset" value="nhaplai">
    <a href="index.php?act=dangnhap">về trang đăng nhập</a>
    <h2 class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </h2>
</form>
<style>
    h1{
        margin: 5px 0;
        text-align: center;
    }
    form{
        line-height: 2;
        margin: 0 60px;
    }
    form .a{
        width: 90%;
        height: 30px;
    }
    .b{
        margin: 20px 450px;
        border: 1px solid #cccc;
    }
    .c{
        margin-left: 60px;
        width: 100px;
        height: 30px;
    }
</style>