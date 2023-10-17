 <div class="main">
            <table class="table-header">
                <tr>
                    <th title="Sắp xếp" style="width: 5%">Stt <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 20%">Tài Khoản<i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%" >Mật Khẩu <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%" >Số Điện Thoại<i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 25%">Ngày tạo tài khoản <i class="fa fa-sort"></i></th>
                </tr>
               <?php
               foreach ($khachhang as $kh) {
                extract($kh);
                echo'<tr>
                <td title="Sắp xếp" style="width: 5%">'.$ma_kh.'</td>
                <td title="Sắp xếp" style="width: 20%">'.$ho_ten.'</td>
                <td title="Sắp xếp" style="width: 15%" >'.$mat_khau.'</td>
                <td title="Sắp xếp" style="width: 15%" >'.$so_dien_thoai.'</td>
                <td title="Sắp xếp" style="width: 25%">'.$kich_hoat.'</td>
            </tr>';
               }
               ?>
            </table>
            <div class="table-content">
            </div>
            <div class="table-footer">
                <select name="kieuTimKhachHang">
                    <option value="ten">Tìm theo số điện thoại</option>
                    <option value="taikhoan">Tìm theo tài khoản</option>
                </select>
                <input type="text" placeholder="Tìm kiếm...">
                <button><i class="fa fa-plus-square"></i> <a href="">Thêm người dùng</a></button>
            </div>
            
</div>