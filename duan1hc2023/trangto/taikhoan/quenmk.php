<div>Quên mật khẩu </div>


<form action="index.php?act=quenmk" method="post">

    Email
    <input type="email" name="email">
    <span style="color:red" ><?php echo $error_email ?></span>
    <input type="submit" name="guiemail" value="Gửi">

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