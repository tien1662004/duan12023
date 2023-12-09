<div class="a">
            <div class="a tm">
                <h1>Danh sách Tài khoản</h1>
            </div>
            <div class="a formconten">
                </div>
                <div class="a mb2 formds">
                    <table border = "1">
                        <tr>
                            <th>Ma TK</th>
                            <th>tên đang nhập</th>
                            <th>mật khẩu</th>
                            <th>email</th>
                            <th>địa chỉ</th>
                            <th>điện thoại</th>
                         
                            <th>ROLE</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td><a href="'.$suatk.'"><input type="button" value="sua"></a> <a href="'.$xoatk.'"><input type="button" value="xoa"></a></td>
                        </tr>';
                        }
                        ?>
                       
                    </table>
                   
                </div>
                <div class="a mb2">
                    <!-- <input type="button" value="chọn tất cả ">
                    <input type="button" value="bỏ chọn tất cả">
                    <input type="button" value="xóa tất cả mục đã chọn"> -->
                   <!-- <a href="index.php?act=adddm"> <input type="button" value="nhập thêm"> </a> -->
                </div>
                </form>
          </div>