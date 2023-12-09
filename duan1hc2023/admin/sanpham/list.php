<div class="a">
    <div class="a tm mb2">
        <h1>Danh sách loại hàng</h1>
    </div>

    <form action="index.php?act=lissp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected> Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo ' <option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="ok">
    </form>
    <div class="a formconten">
        <div class="a mb2 formds">
            <table border="1">
                <tr>
                    <th class="sp">Ma loai</th>
                    <th class="sp">Tên sản phẩm</th>
                    <th class="sp">hình</th>
                    <th class="sp">Giá</th>
                    <th class="sp">mota</th>
                    <th class="sp">Chỉnh</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $anh = "../upload/" . $img;
                    if (is_file($anh)) {
                        $hinh = "<img src='" . $anh . "' height='80'>";

                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td> 
                            <td>' . $mota . '</td> 
        
                            <td><a href="' . $suasp . '"><input type="button" value="sua"></a> <a href="' . $xoasp . '"><input type="button" value="xoa"></a></td>
                        </tr>';
                }
                ?>
            </table>
        </div>
        <div class="a mb2">
            <input type="button" value="chọn tất cả ">
            <input type="button" value="bỏ chọn tất cả">
            <input type="button" value="xóa tất cả mục đã chọn">
            <a href="index.php?act=addsp"> <input type="button" value="nhập thêm"> </a>
        </div>

    </div>