<?php
include '../trangmodel/sanpham.php';
include '../trangmodel/pdo.php';
include '../trangmodel/danhmuc.php';
include '../trangmodel/binhluan.php';
include '../trangmodel/taikhoan.php';
include 'trangchu.php';


if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $ten = $_POST['ten'];
                danhmuc($ten);
                $thongbao = "them thanh cong";
            }
            include 'danhmuc/add.php';
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten = $_POST['ten'];
                $id = $_POST['id'];
                update_danhmuc($id, $ten);
                $thongbao = "cập nhật thành công ";
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        case 'addsp':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['ten_sp'];
                $giasp = $_POST['gia_sp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                issert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;
        case 'lissp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['ten_sp'];
                $giasp = $_POST['gia_sp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cập nhật thành công ";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include 'binhluan/list.php';
            break;
        case 'dsdh':
            include 'bill/danhsach.php';
            break;
        default:

            break;
    }

}


?>