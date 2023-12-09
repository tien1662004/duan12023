<div class="a">
    <div class="a tm">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="a formconten mb2">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="a mb2">
                Danh mục <br>
                <select value="" name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo ' <option value="' . $id . '">' . $name . '</option>';

                    }
                    ?>
                    <option value=""></option>
                </select>

            </div>
            <div class="a mb2">
                Tên sản phẩm <br>
                <input type="text" name="ten_sp">
            </div>
            <div class="a mb2">
                Giá <br>
                <input type="text" name="gia_sp">
            </div>
            <div class="a mb2">
                hình <br>
                <input type="file" name="hinh">
            </div>
            <div class="a mb2">
                mota <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="a mb2">
                <input type="submit" name="them" value="Thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=lissp"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>
</body>

</html>