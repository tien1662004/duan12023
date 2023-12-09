<?php
session_start();
include 'trangmodel/pdo.php';
include 'trangmodel/danhmuc.php';
include 'trangmodel/sanpham.php';
include 'trangto/trangchu.php';
include 'trangmodel/taikhoan.php';
include 'trangmodel/bill.php';
include 'global.php';

$error_name = $error_pass = $error_email = "";  
$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham("", $iddm);
            $tendm = load_ten_dm($iddm);
            include "trangto/sanpham.php";
            break;
        case 'chitietsp':
            if (isset($_GET['idaa']) && ($_GET['idaa'] > 0)) {
                $id = $_GET['idaa'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                $tendm = load_ten_dm($iddm);
                include "trangto/chitietdh.php";
            } else {
                include "trangto/home.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if(empty($email)){
                    $error_email = "Không được để trống";
                }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error_email = "Email không đúng định dạng !!!";
                }

                if(empty($user)){
                    $error_name = "Không được để trống";
                }else if(strlen($user) < 8){
                    $error_name = "Tối thiểu phải 8 ký tự !!!";
                }

                if(empty($pass)){
                    $error_pass = "Không được để trống";
                }else if(strlen($pass) < 8){
                    $error_pass = "Tối thiểu phải 8 ký tự !!!";
                }

                issert_taikhoan($email, $user, $pass);
                // $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực chức năng bình luận hoặc đặt hàng!";
            }
            include "trangto/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if(empty($user)){
                    $error_name = "Không được để trống";
                }else if(strlen($user) < 8){
                    $error_name = "Tối thiểu phải 8 ký tự !!!";
                }
                if(empty($pass)){
                    $error_pass = "Không được để trống";
                }else if(strlen($pass) < 8){
                    $error_pass = "Tối thiểu phải 8 ký tự !!!";
                }

                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongbao="Bạn đã đăng nhập thành công";
                    header('Location:index.php');

                } else {
                    $thongbao = "tài khoản ko tồn tại";
                }
            }
            include "trangto/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                // $address = $_POST['address'];
                // $tel = $_POST['tel'];
                $id = $_POST['id'];

                if(empty($user)){
                    $error_name = "Không được để trống";
                }else if(strlen($user) < 8){
                    $error_name = "Tối thiểu phải 8 ký tự !!!";
                }
                if(empty($pass)){
                    $error_pass = "Không được để trống";
                }else if(strlen($pass) < 8){
                    $error_pass = "Tối thiểu phải 8 ký tự !!!";
                }
                if(empty($email)){
                    $error_email = "Không được để trống";
                }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error_email = "Email không đúng định dạng !!!";
                }

                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            include "trangto/taikhoan/edittk.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                if(empty($email)){
                    $error_email = "Không được để trống";
                }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error_email = "Email không đúng định dạng !!!";
                }

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "email này ko tồn tại";
                }
            }
            include "trangto/taikhoan/quenmk.php";
            break;
        case 'product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $onesp = load_one_product($_GET['id']);
                extract($onesp);
                include "chitietsp.php";
            } else {
                include "home.php";
            }
            break;
        case 'giohang':
            if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                // check trùng sản phẩm
                $check = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $item) {
                    if ($item[1] == $name) {
                        $soluongnew = $soluong + $item[4];
                        $_SESSION['mycart'][$i][4] = $soluongnew;
                        $check = 1;
                        break;
                    }
                    $i++;
                }
                if ($check == 0) {
                    $spadd = [$id, $name, $img, $price, $soluong];
                    $_SESSION['mycart'][] = $spadd;
                }
            }
            if (isset($_POST['muangay']) && ($_POST['muangay'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                $_SESSION['mycart'][] = $spadd;
                include 'trangto/donhang.php';
            }
            include 'trangto/cart/cart.php';
            break;
        case 'donhang':
            // if(isset($_POST['dathang']) && ($_POST['dathang'])) {

            // }
            include "trangto/donhang.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                unset($_SESSION['mycart'][$idcart]);
                $_SESSION['mycart'] = array_values($_SESSION['mycart']); // Reset array keys
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=giohang');
            break;
        case 'thongtin':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $pay = $_POST['payc'];
                $ghichu = $_POST['ghichu'];
                $total = $_POST['total'];

                echo 'Thanh Toán Thành Công';
                $id_bill = insert_bill($name, $phone, $email, $address, $pay, $ghichu, $total);

                // lưu sản phẩm vào database
                foreach ($_SESSION['mycart'] as $item) {
                add_cart($item['0'],$id_bill, $item['1'], $item['4']);
                }

                // if(empty($email)){
                //     $error_email = "Không được để trống";
                // }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                //     $error_email = "Email không đúng định dạng !!!";
                // }
                //     include"trangto/donhang.php";
            // }else if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])){
            //     $name = $_POST['name'];
            //     $phone = $_POST['phone'];
            //     $email = $_POST['email'];
            //     $address = $_POST['address'];
            //     $pay = $_POST['payc'];
            //     $ghichu = $_POST['ghichu'];
            //     $total = $_POST['total'];
            //     echo 'Thanh Toán Thành Công';
            //     $id_bill = insert_bill($name, $phone, $email, $address, $pay, $ghichu, $total);

            //     // lưu sản phẩm vào database
            //     foreach ($_SESSION['mycart'] as $item) {
            //     add_cart($item['0'],$id_bill, $item['1'], $item['4']);
            //     }
            }
            break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;
        case 'lienhe':
            include "trangto/lienhe.php";
            break;
        default:
            include 'trangto/home.php';
            break;
    }
} else {
    include 'trangto/home.php';
}
include 'trangto/chantrang.php';
?>