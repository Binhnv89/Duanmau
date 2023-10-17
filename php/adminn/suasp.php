<?php
extract($ct_sanpham);
?>
 <div class="main">
        <form method="post" enctype="multipart/form-data">
                <p>Tên Sản Phẩm:</p> <input type="text" name="ten" value="<?php echo $ten_sp ?>"><br>
                <p>Giá Sản Phẩm: </p><input type="number" name="gia" value="<?php echo $don_gia ?>"><br>
                <p>Loại Sản Phẩm: </p><select name="loai">
                <?php foreach($loaisp as $loai){
                                $se='';
                                if ($loai['ma_loai'] == $ma_loai) {
                                    $se='   selected    ';
                                }
                                echo"<option $se value='{$loai['ma_loai']}'>{$loai['ten_loai']}</option> ";
                        }
                        ?>   
                        ?>        
                </select><br>
               <p> Hình Ảnh:</p><input type="file" name="anhsp"><br>
               <p> Mô Tả Sản Phẩm:</p> <br><textarea name="mota" id="" cols="100" rows="10" ><?php echo $mo_ta?></textarea><br>
                <button type="submit">Lưu Thay đổi</button>
        </form>
            </div>