 <div class="main">
            <table class="table-header">
                <tr>
                    <th title="Sắp xếp" style="width: 10%" >Mã Loại <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 60%" >Tên Loại Sản Phẩm <i class="fa fa-sort"></i></th>
                    <th style="width: 30%">Hành động</th>
                </tr>
                <?php
                foreach($loaisp as $lsp){
                    extract($lsp);
                    $link_sua_loai="./admin.php/?mn=sualoai&id=$ma_loai";
                    $link_xoa_loai="./admin.php/?mn=xoaloai&id=$ma_loai";
                    $hoi='onclick="return confirm(\'Bạn Có Muốn Sản Phẩm này không\')"';
                    echo'<tr>
                     <td title="Sắp xếp" style="width: 10%; height: 50px;"  >'.$ma_loai.'</td>
                    <td title="Sắp xếp" style="width: 60%; height: 50px;" >'.$ten_loai.'</td>
                    <td style="width: 30%; height: 50px;">
                <a href="'.$link_sua_loai.'">Sửa</a>
                <a '.$hoi.' href="'.$link_xoa_loai.'">Xóa</a>
                </td>
                    </tr>';
                }
                ?>
            </table>
           
            <div class="table-content">
            </div>

            <div class="table-footer">
                <div class="timTheoNgay">
                    Từ ngày: <input type="date" id="fromDate">
                    Đến ngày: <input type="date" id="toDate">

                    <button><i class="fa-solid fa-circle-plus"></i> <a href="../admin.php/?mn=themloai">Thêm loại sản Phẩm</a></button>
                </div>

                <select name="kieuTimDonHang">
                    <option value="ma">Tìm theo mã</option>
                    <option value="khachhang">Tìm theo tên </option>
                </select>
                <input type="text" placeholder="Tìm kiếm...">
            </div>

        </div> 