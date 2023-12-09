<div class="content">
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
  <div class="danhmuc">
    <div class="danhmuc_img">
      <img src="trangto/image/danhmuc_1.webp" alt="" />
      <h3 style="color: chocolate">
        Hambuger <br />
        <a href="#" style="
                  text-decoration: none;
                  font-family: sans-serif;
                  font-size: 14px;
                ">Xem Ngay</a>
      </h3>
    </div>
    <div class="danhmuc_img">
      <img src="trangto/image/danhmuc_1.webp" alt="" />
      <h3 style="color: chocolate">
        Hambuger <br />
        <a href="#" style="
                  text-decoration: none;
                  font-family: sans-serif;
                  font-size: 14px;
                ">Xem Ngay</a>
      </h3>
    </div>
    <div class="danhmuc_img">
      <img src="trangto/image/danhmuc_1.webp" alt="" />
      <h3 style="color: chocolate">
        Hambuger <br />
        <a href="#" style="
                  text-decoration: none;
                  font-family: sans-serif;
                  font-size: 14px;
                ">Xem Ngay</a>
      </h3>
    </div>
    <div class="danhmuc_img">
      <img src="trangto/image/danhmuc_1.webp" alt="" />
      <h3 style="color: chocolate">
        Hambuger <br />
        <a href="#" style="
                  text-decoration: none;
                  font-family: sans-serif;
                  font-size: 14px;
                ">Xem Ngay</a>
      </h3>
    </div>
  </div>
  <div class="danhmucyeuthich">
    <h2>SẢN PHẨM MỚI NHẤT </h2>
    <div class="danhmuctop5sp">
      <?php
      $i = 0;
      foreach ($spnew as $sp) {
        extract($sp);
        $linksp = "index.php?act=chitietsp&idaa=" . $id;
        $hinh = $img_path . $img;
        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
        } else {
        }
        echo '
        <div class="danhmuc_content">
          <form action="index.php?act=giohang" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="hidden" name="soluong" value="1" class="quantity"><br>

                <a href="' . $linksp . '">
                <img src="' . $hinh . '" />  </a>
                <p style="font-weight: 600">' . $name . '</p>
                <span style="color: red;">' . $price . '</span> </br>
                <input type="submit" name="muangay" value="Mua Ngay" />
                <input type="submit" name="themgiohang" value="Thêm Giỏ Hàng" />
          </form>
        </div>';
        $i++;
      }
      ?>
    </div>
  </div>

  <div class="banner_2">
    <img src="trangto/image/banner_demo.webp" alt="">
  </div>

  <div class="danhmucyeuthich">
    <h2>Được Mua Nhiều Nhất</h2>
    <div class="danhmuctop5sp">
      <?php
      $i = 0;
      foreach ($spnew as $sp) {
        extract($sp);
        $hinh = $img_path . $img;
        $linkdm = "index.php?act=home&iddm=" . $id;
        if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
        } else {
        }
        echo '
        <div class="danhmuc_content">
          <img src="' . $hinh . '" />
          <p style="font-weight: 600">' . $name . '</p>
          <span style="color: red;">' . $price . '</span><br />
          <input type="submit" value="Mua Ngay" />
          <input type="submit" value="Thêm Giỏ Hàng" />
        </div> ';
        $i + 1;
      }
      ?>
    </div>
  </div>
</div>