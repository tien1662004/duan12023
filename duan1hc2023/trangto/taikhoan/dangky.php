<div class="b">
<h1>Đăng ký thành viên</h1>
<form action="index.php?act=dangky" method="post">
    Email <br>
    <input type="email" name="email" class="a"><br>
    <span style="color:red" ><?php echo $error_email ?></span><br>

    Tên đăng nhập <br>
    <input type="text" name="user" class="a"><br>
    <span style="color:red" ><?php echo $error_name ?></span><br>

    Mật khẩu <br>
    <input type="password" name="pass" class="a"><br>
    <span style="color:red" ><?php echo $error_pass ?></span><br>

    <input type="submit" name="dangky" value="Đăng ký" class="c">
    <input type="reset" value="nhaplai" class="c"> <br>
    <a href="index.php?act=dangnhap">về trang đăng nhập</a>
    <h2 class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </h2>
</form>
</div>
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