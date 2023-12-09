<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="boxtrai_ctsp">
            <img src="<?= $hinh = $img_path . $img ?>" alt="">
        </div>
        <div class="boxphai_ctsp">
            <h3><?= $name ?></h3>
            <h2 class="textdm"><p>Loại: <?= $tendm ?></p></h2>
            <p style="color:red;font-weight: 600"><?= $price ?></p>
            <form action="index.php?act=giohang" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="name" value="<?= $name ?>">
                <input type="hidden" name="img" value="<?= $img ?>">
                <input type="hidden" name="price" value="<?= $price ?>">
                <input type="text" name="soluong" value="1" class="quantity"><br>
                
                <input type="submit" class="buttonall" name="muangay" value="Mua Ngay">
                <input type="submit" class="buttonall" name="themgiohang" value="Thêm vào giỏ hàng"><br>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#binhluan").load("trangto/binhluan/binhluanform.php", { idpro: <?= $id?>});
                    });
                </script>
            </form>
            <span><?= $mota ?></span>
            <h4>Bình luận</h4>
            <div class="comment " id="binhluan">

            </div>
        </div>
    </div>
</body>
</html>
<style>
    .content {
        margin: 30px;
        display: flex;
    }

    .boxtrai_ctsp {
        width: 40%;
        height: 350px;
    }

    .boxtrai_ctsp img {
        width: 350px;
        height: 350px;
    }

    .boxphai_ctsp {
        width: 60%;
        height: 350px;
        line-height: 30px;
    }

    .quantity {
        text-align: center;
        width: 40px;
        height: 40px;
    }

    .buttonall {
        margin: 20px 0;
        width: 200px;
        height: 30px;
    }
    .textdm p{
        font-weight: 100;
        font-size: 15px;
    }
    .comment{
        height: 90px;
        border: 1px solid #ccc;
    }
</style>