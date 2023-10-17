<?php
extract($ct_sanpham);
?>
<style>
    td{
        padding: 0 30px;
        font-size: 20px;
        border-bottom: 1px solid gray;
    }
</style>
<div class="rightt">
        <p class="ma"><?= $ten_sp?></p>
        <section class="chitiet">
            <div class="tong1">
            <div class="chinh">
                <img src="<?=$image?>" alt="">
            </div>
            <div class="phu2">
                <img src="<?=$image?>" alt="">
                <img src="<?=$image?>" alt="">
                <img src="<?=$image?>" alt="">
            </div>
            </div>
            <div class="tong2">
                <div class="tinhtrang">
                <p>Mã Sản Phẩm:<?=$ma_loai?></p>
                <p>Tình Trạng: Còn Hàng</p>
                <p class="a">Đã Bán: 999+</p>
                </div>
               <div class="d">
               <p class="e">Giá sale: <?=$don_gia?><sup>đ</sup></p>
                <p >Giá gốc:<del>3.500.000<sup>đ</sup></del> </p>
                <p >Tiết Kiệm: 1.7000.000<sup>đ</sup></p>
               </div>
                <div class="uudai">
                    <p class="b"><i class="fa-solid fa-hand-holding-heart"></i><strong> Mua Càng Nhiều, Ưu Đãi Càng Lớn</strong><br>(Ưu Đãi Có Thể Kết Thúc Sớm)</p>
                    <p class="c"><i class="fa-regular fa-circle-check"></i>Freeship khi mua 2 đôi</p>
                    <p class="c"><i class="fa-regular fa-circle-check"></i>Tặng Tất theo mỗi sản phẩm</p>
                    <p class="c"><i class="fa-regular fa-circle-check"></i>Mua 5 Đôi Tặng 1</p>
                </div>
            </div>
            
        </section>
        <div class="size">
                <p class="s">size: 
                    <input type="button" value="39">
                    <input type="button" value="40">
                    <input type="button" value="41">
                    <input type="button" value="42">
                    <input type="button" value="43">
            </p>
            <p>Chọn số lượng : <input type="number" name="" id="" value="1"min="1" width="40px;" height="30px;"></p>
            </div>
            <div class="dathang">
                <button type="button">Đặt Hàng</button>
            </div>
            <h3 class="h3">Thông số sản phẩm</h3>
              <div class="thongso">
            <div class="tents">
                <strong>Size</strong><br>
                <strong>Quà Tặng</strong><br>
                <strong>Thương Hiệu</strong><br>
                <strong>Loại Hàng</strong><br>
            </div>
            <div class="giatri">
                <p>34, 40 , 41, 42, 43</p>
                <p> Full box + tax + bill, Tặng Tất</p>
                <p>Dior</p>
                <p>Like auth</p>
            </div>
        </div>
        <div class="motasp">
            <h3>Mô tả về sản phẩm</h3>
            <p><?=$mo_ta?></p>
        </div>
        
        <hr>
        <div class="danhgia">
            <h2>Đánh Giá</h2>
            <?php
                foreach($binh_luan as $valu){
                    extract($valu);
                    echo "
                    <table>
                    <tr>
                    <td>$ho_ten</td>
                    <td>$noi_dung</td>
                    <td>$ngay_bl</td>
                </tr>
                    </table>
                    ";
                }
            ?>

            <p class="o">Đánh giá “Dior B27 Low-Top White Gray Smooth Calfskin Oblique Galaxy Leather Like Auth” </p>
            <p><a href=""><i class="fa-solid fa-star"></i></a>|
                <a href=""><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></a>|
                <a href=""><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></a>|
                <a href=""><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></a>|
                <a href=""><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></a>|
        </p>  
          <form action="" method="post">
          <label for=""><strong>Nhận xét của bạn</strong></label><br>
          <textarea name="nhanxet" id="" cols="100" rows="10"></textarea><br>
          <button type="submit">Gửi Đi</button>
          </form>
        </div>
        <div class="tieu"><h3>Sản Phẩm Mới</h3></div>
            <div class="sanphammoi">
            <?php
                foreach($spmoi as $sanphamn){
                    extract($sanphamn);
                    $link_sp="./index.php/?act=sanphamct&id=$ma_sp";
                    echo'<div class="sp">
                       <div class="imgs">
                       <img src="'.$image.'" alt="" width="200px" height="200px">
                        <div class="hover">
                            <a href="'.$link_sp.'"><i class="fa-solid fa-gear fa-spin" style="color: #db7093;"></i> Chi tiết sản phẩm</a>
                        </div>
                       </div>
                        <p>'.$ten_sp.'</p>
                        <p> Giá: '.$don_gia.'<sup>đ</sup></p>
                        <button>Mua Ngay</button><br>
                        <button>Thêm Vào Giỏ Hàng</button>
                    </div>';
                }
                ?>
                  
            </div>
            <p class="buton"><button >Xem Thêm...</button></p>
        </div>