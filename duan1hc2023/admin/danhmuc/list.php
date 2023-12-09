<table border = "1">

    <tr>
        <th>Ma Danh Mục</th>
        <th>Tên Danh Mục</th>
        <th>Chỉnh</th>
    </tr>
    <?php
    foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        $suadm = "index.php?act=suadm&id=" . $id;
        $xoadm = "index.php?act=xoadm&id=" . $id;
        echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>
                                <a href="' . $suadm . '"><input type="button" value="sua"></a>
                                <a href="' . $xoadm . '"><input type="button" value="xoa"></a>
                            </td>
            </tr>';
    }
    ?>

</table>
<a href="index.php?act=adddm"> <input type="button" value="nhập thêm"> </a>
<!-- </form> -->