 <div class="main">
        <form method="post" enctype="multipart/form-data">
                <p>Tên Sản Phẩm:</p> <input type="text" name="ten"><br>
                <p>Giá Sản Phẩm: </p><input type="number" name="gia"><br>
                <p>Loại Sản Phẩm: </p><select name="loai">
                        <?php foreach($loaisp as $loai){
                                extract($loai);
                                echo' <option value="'. $ma_loai.'"> '.$ten_loai.'</option>';
                        }
                        ?>        
                </select><br>
               <p> Hình Ảnh:</p><input type="file" name="anhsp"><br>
               <p> Mô Tả Sản Phẩm:</p> <br><textarea name="mota" id="" cols="100" rows="10"></textarea><br>
                <button type="submit">Thêm Sản Phẩm</button>
        </form>
            </div>