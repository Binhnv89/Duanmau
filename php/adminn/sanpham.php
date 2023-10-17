
    <!-- Khung hiển thị chính -->
    <div class="main">
        <!-- Sản Phẩm -->
        <div class="sanpham">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th title="Sắp xếp" style="width: 5%" >Stt <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Tên <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 10%">Giá <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 22%" >Ảnh Sản Phẩm <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 30%">Mô Tả <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 8%" >Mã Loại<i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Hành động</th>
                </tr>
                <?php
                foreach($sanpham as $sp){
                    extract($sp);
                    $hoi='onclick="return confirm(\'Bạn Có Muốn Sản Phẩm này không\')"';
                    $link_sua="./admin.php/?mn=sua&id=$ma_sp";
                    $link_xoa="./admin.php/?mn=xoa&id=$ma_sp";
                    echo' <tr>
                    <td title="Sắp xếp" style="width: 5%" >'.$ma_sp.' </td>
                    <td title="Sắp xếp" style="width: 15%">'.$ten_sp.'</td>
                    <td title="Sắp xếp" style="width: 1%">'.$don_gia.'</td>
                    <td title="Sắp xếp" style="width: 22%" ><img src="'.$image.'" alt="" width="200px"></td>
                    <td title="Sắp xếp" style="width: 30%" >'.$mo_ta.'</td>
                    <td title="Sắp xếp" style="width: 8%" >'.$ma_loai.' </td>
                    <td style="width: 10%">
                    <a href="'.$link_sua.'">Sửa</a>
                    <a '.$hoi.' href="'.$link_xoa.'">Xóa</a>
                    </td>
                </tr>';
                }
                ?>
            </table>

            <div class="table-footer">
                <form action="./admin.php?mn=sp" method="post">
                 <input type="text" placeholder="Tìm kiếm..." name="kyw">    
                <select name="iddm">
                   <option value="0" >ALL Sản Phẩm</option>
                    <?php
                    foreach($loaisp as $loai){
                        extract($loai);
                        echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                    }
                    ?>
                    </select>
                   
                    <button type="submit" name="listok">Tìm Kiếm</button>
                   </form>
                
                
                <button>
                    <i class="fa fa-plus-square"></i>
                   <a href="./admin.php/?mn=themsp"> Thêm sản phẩm</a>
                </button>
            </div>

           


    </div>
    </div> 
</body>
</html>