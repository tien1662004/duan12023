<div class="content">
    <form action="index.php?act=donhang" method="post">
        <h1 class="title_cart">Giỏ Hàng</h1>
        <h3>Thông tin sản phẩm</h3>
        <div class="table_cart">
            <table border="1px solid #ccc">
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th style="color:red">Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th style="color:red">Thành Tiền</th>
                    <th>Xóa</th>
                </tr>
                <?php
                $tong = 0;
                $stt = 1;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[2];
                    $ttien = $cart[3] * $cart[4];
                    $tong += $ttien;
                    $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"> <input type="button" value="xóa"></a>';
                    echo '
                    <tr>
                        <td>'.$stt.'</td>
                        <td><img src="' . $hinh . '" alt="Ảnh Sản Phẩm" width="100px" ; height="100px"></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td><input type="text" name="soluong" value="' . $cart[4] . '" class="quantity"></td>
                        <td>' . $ttien . '</td>
                        <td >' . $xoasp . ' </td>
                        <input type="hidden" name="name"    value="'.$cart[1].'">
                        <input type="hidden" name="soluong" value="'.$cart[4].'">
                        <input type="hidden" name="price"   value="'.$cart[3].'">
                        <input type="hidden" name="ttien"   value="'.$ttien.'">
                    </tr>';
                    $i += 1;
                    $stt += 1;
                }
                echo '
                    <tr>
                        <td colspan="5">Tổng đơn hang</td>
                        <td>' . $tong . '</td>
                        <td><input type="submit" name="capnhat"   value="capnhat"></td>
                     </tr>';
                ?>
            </table>
        </div>
        <div class="oder">
            <input type="submit" name="dathang" value="Đặt Hàng">
        </div>
    </form>
</div>
<style>
    .content {
        height: 1000px;
    }

    .quantity {
        text-align: center;
        width: 40px;
        height: 40px;
    }

    .title_cart {
        padding: 30px;
        text-align: center;
    }

    .content h3 {
        color: red;
        padding: 20px 0;
    }

    .table_cart table tr th,
    td {
        text-align: center;
        width: 150px;
    }

    .table_cart table tr td .SL {
        text-align: center;
        width: 30px;
        height: 30px;
    }

    .table_cart table th:nth-child(1) {
        width: 5%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(2) {
        width: 20%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(3) {
        width: 30%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(4) {
        width: 10%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(5) {
        width: 10%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(6) {
        width: 15%;
        background-color: #ccc;
    }

    .table_cart table th:nth-child(7) {
        width: 5%;
        background-color: #ccc;
    }

    .oder input {
        margin-left: 90%;
        padding: 10px
    }
</style>
<script src="https://kit.fontawesome.com/1216c65371.js" crossorigin="anonymous">
</script>

</html>