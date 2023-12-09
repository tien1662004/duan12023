<?php
if(is_array($sanpham)){
    extract($sanpham);
   
    
}
$anh="../upload/".$img;
if(is_file($anh)){
    $hinh="<img src='".$anh."' height='80'>";
}else{
    $hinh="no photo";
}
?>
<div class="a">
            <div class="a tm">
                <h1>Cập nhật loại hàng</h1>
            </div>
          <div class="a formconten">
          <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="a mb2">
                <select  name="iddm">
                        <option value="0" selected>  Tất cả</option>
                    <?php
                  foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if ($iddm == $id) $s = "selected"; else $s = "";
                    echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                }
                    ?>
                </select>
            </div>
            <div class="a mb2">
                Tên sản phẩm <br>
                <input type="text" name="ten_sp" value="<?=$name?>">
            </div>
            <div class="a mb2">
               Giá <br>
                <input type="text" name="gia_sp" value="<?=$price?>">
            </div>
            <div class="a mb2">
                hình <br>
                <input type="file" name="hinh" >
                <?=$hinh?>
            </div>
            <div class="a mb2">
                mota <br>
               <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
            </div>
            <div class="a mb2">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=lissp"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
          </div>
        </div>
        </div>
</body>
</html>