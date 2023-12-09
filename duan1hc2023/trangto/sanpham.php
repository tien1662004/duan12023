<div class="content_sp">
  <div class="chinhsach">
    <div class="chinhsach-hanghoa">
      <img src="trangto/image/iconcs.webp" alt="" />
      <div class="text">
        <span style="font-weight: 600; font-size: 16px">Miễn Phí Vận Chuyển</span>
        <span style="font-size: 14px">Áp dụng free ship cho tất cả đơn hàng từ 300 nghìn</span>
      </div>
    </div>
    <div class="chinhsach-hanghoa">
      <img src="trangto/image/iconcs2.webp" alt="" />
      <div class="text">
        <span style="font-weight: 600; font-size: 16px">Đổi trả dễ dàng</span>
        <span style="font-size: 14px">Đổi ngay trong ngày nếu như bánh không đúng yêu cầu</span>
      </div>
    </div>
    <div class="chinhsach-hanghoa">
      <img src="trangto/image/iconcs3.webp" alt="" />
      <div class="text">
        <span style="font-weight: 600; font-size: 16px">Hỗ trợ nhanh chóng</span>
        <span style="font-size: 14px">Gọi Hotline: 19006750 để được hỗ trợ ngay</span>
      </div>
    </div>
    <div class="chinhsach-hanghoa" style="width: 230px">
      <img src="trangto/image/iconcs4.webp" alt="" />
      <div class="text">
        <span style="font-weight: 600; font-size: 16px">Thanh toán đa dạng</span>
        <span style="font-size: 14px">Thanh toán khi nhận hàng, Napas, Visa, Chuyển Khoản</span>
      </div>
    </div>
  </div>
  <h1>TẤT CẢ SẢN PHẨM</h1>
  <div class="boxall">

  <div class="boxtrai">
  <form action="index.php?act=chitietsp" method="post" class="seach">
      <input type="text" name="kyw" placeholder="Tìm Kiếm">
    </form>
    <?php
    foreach ($dsdm as $dm) {
      extract($dm);
      $linkdm = "index.php?act=sanpham&iddm=" . $id;
      echo '
               <li>
                <a href="' . $linkdm . '">' . $name . '</a>
               </li>';
    }
    ?>
  </div>

  <div class="boxgiua"></div>
  <div class="boxphai">
    <h2 class="textdm">
      <strong><?= $tendm ?></strong>
    </h2>
    <div class="danhmuctop5sp">
      <?php
      $i = 0;
      foreach ($dssp as $sp) {
        extract($sp);
        $linksp = "index.php?act=chitietsp&idaa=" . $id;
        $hinh = $img_path . $img;
        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
        } else {
        }
        echo '
        <form action="index.php?act=giohang" method="post">
          <div class="danhmuc_content" >
            <input type="hidden" name="id" value="'. $id .'">
            <input type="hidden" name="name" value="'.$name.'">
            <input type="hidden" name="img" value="'.$img.'">
            <input type="hidden" name="price" value="'.$price.'">
            <input type="hidden" name="soluong" value="1" class="quantity"><br>
              <a href="' . $linksp . '">
              <img src="' . $hinh . '" />  </a>
              <p style="font-weight: 600" >' . $name . '</p>
              <span style="color: red;">' . $price . '</span>
              <del><span style="font-size: 13px;">50.000 VND</span></del><br />
              <input type="submit" name="muangay" value="Mua Ngay" />
              <input type="submit" name="themgiohang" value="Thêm Giỏ Hàng" />
          </div> 
        </form>';
        $i + 1;
      }
      ?>
    </div>
  </div>  
  </div>
</div>
</div>

<style>
  h1 {
    text-align: center;
    margin: 20px 0;
  }
  .boxall{
    display: flex;
  }
  .boxtrai{
    width: 18%;
  }
  .boxtrai li a{
    color: #000;
    text-decoration: none;
  }
  .boxtrai li {
    border: 1px solid #ccc;
    padding: 10px;
    list-style: none;
  }
  .boxtrai li:hover{
    background-color: #ccc;
  }
  .boxgiua{
    width: 2%;
  }
  .boxphai{
    width: 80%;
    border: 2px solid #ffc107;
  }
  .textdm{
    margin-left: 20px;
    padding: 10px;
  }
  .seach input{
    margin-top: 20px;
    width: 100%;
    height: 30px;
  }
</style>