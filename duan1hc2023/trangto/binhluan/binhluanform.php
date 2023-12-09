<?php
session_start();
include '../../trangmodel/pdo.php';
include '../../trangmodel/binhluan.php';
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="a b ">
    <!-- <div class="td">Bình luận</div> -->
    <div class="conten2 menu2 binhluan">
      <table>
        <?php 
        foreach ($dsbl as $bl) {
          extract($bl);
          echo '<tr>
            <td>' . $noidung . '</td>
            <td>' . $name_user . '</td>
            <td>' . $ngaybinhluan . '</td>
          </tr>';
        }
        ?>
      </table>
    </div>
    <div class="boxft shopbx">
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="idpro" value="<?= $idpro ?>">
        <input type="text" name="noidung">
        <input type="submit" name="guibinhluan" value="Gửi bình luận">
      </form>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
      $noidung = $_POST['noidung'];
      // $idpro = $_POST['idpro'];
      $name = $_POST['name'];
      $iduser = $_SESSION['user']['id'];
      $ngaybinhluan = date('h:i:sa d/m/Y');
      issert_binhluan ($noidung, $iduser, $idpro, $ngaybinhluan);
      header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
  </div>
</body>

</html>
<style>
    .binhluan table {
      width: 90%;
      margin-left: 5%;
    }

    .binhluan table td:nth-child(1) {
      width: 50%;
    }

    .binhluan table td:nth-child(2) {
      width: 20%;
    }

    .binhluan table td:nth-child(3) {
      width: 30%;
    }
  </style>