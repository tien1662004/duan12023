<style>
    .abc input {
        width: 700px;
    }
</style>
<h1>Thêm mới Danh Mục</h1>
<form action="index.php?act=adddm" method="post">
    <div class="abc">
        Mã Danh Mục<br>
        <input type="text" name="ma" id="">
    </div>
    <div class="abc">
        Tên Danh Mục <br>
        <input type="text" name="ten" id="">
    </div>
    <input type="submit" name="them" value="Thêm mới">
    <input type="reset" value="nhập lại">
    <a href="index.php?act=lisdm"><input type="button" value="danh sách"></a>

    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>
</body>
</html>