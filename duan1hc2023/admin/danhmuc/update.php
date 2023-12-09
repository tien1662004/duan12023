<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<h1>Cập nhật Danh Mục</h1>

<form action="index.php?act=updatedm" method="post">

    Mã Danh Mục <br>
    <input type="text" name="ma" id=""><br>
    Tên Danh Mục <br>
    <input type="text" name="ten" value=" <?php if (isset($name) && ($name != ""))
        echo $name; ?> " id="">
    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
        echo $id; ?>"><br>
    <input type="submit" name="capnhat" value="cập nhật">
    <input type="reset" value="nhập lại">
    <a href="index.php?act=lisdm"><input type="button" value="danh sách"></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>
</body>

</html>