<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thanh Toán</h1>
    <form action="index.php?act=thongtin" method="post">
        <div class="boxall">
            <div class="boxtrai">
                <h2>Thông tin người đặt hàng</h2>
                <label>Họ và Tên</label><br>
                <input type="text" name="name" placeholder="Nhập họ tên đầy đủ"><br>
                <label>Điện thoại</label><br>
                <input type="text" name="phone" placeholder="Nhập số điện thoại"><br>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Nhập email"><br>
                <span style="color:red" ><?php echo $error_email ?></span><br>
                <label>Địa chỉ</label><br>
                <input type="text" name="address" placeholder="Nhập địa chỉ đầy đủ"><br>
                <label>Ghi chú</label><br>
                <textarea name="ghichu" cols="30" rows="10"></textarea>
            </div>
            <div class="boxphai">
                <h2>Thông tin đơn hàng</h2>
                <div class="oder">
                    <table border="1">
                        <?php
                        $tong = 0;
                        $i = 0;
                        echo '
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                        </tr>';
                        foreach ($_SESSION['mycart'] as $cart) {
                            $ttien = $cart[3] * $cart[4];
                            $tong += $ttien;
                            echo '
                            <tr>
                                <td>' . $cart[1] . '</td>
                                <td class= "c">' . $cart[4] . '</td>
                            </tr>';
                                $i += 1;
                            }
                        echo '
                            <tr>
                            <th colspan="3">Tổng đơn hang</th>
                            <th>' . $tong . '</th>
                            </tr>';
                        ?>
                    </table>
                </div>
                <div class="pay">
                    <li><input type="radio" name="payc" value="Thanh toán khi nhận hàng">Thanh Toán Khi nhận hàng</li>
                    <input type="hidden" name="total" value = "<?= $tong ?>">
                    <input type="submit" name="thanhtoan" value="Thanh Toán" class="thanhtoan">
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<style>
    h1 {
        margin: 20px 0;
    }

    .boxall {
        display: flex;
    }

    .boxtrai {
        margin-left: 40px;
        width: 50%;
    }

    .boxall h2 {
        margin: 30px 0;
    }

    .boxtrai input {
        width: 80%;
        height: 25px;
        margin: 5px 0;
    }

    .boxtrai label {
        font-weight: 600;
    }

    .boxphai {
        margin-left: 40px;
        width: 50%;
    }

    .boxphai .oder {
        width: 50%;
        height: 100% border: 1px solid #cccc;
    }

    .oder table {
        /* width: 100%; */
    }
    .c{
        text-align: center;
    }
    .pay li {
        list-style: none;
    }
    .pay {
        margin-top: 30px;
    }
    .thanhtoan {
        margin-top: 10%;
        padding: 10px;
    }
</style>