<section class="right">
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
            <div class="anh_sale">
                <img src="/PHP/huynvph34362_WD18339/img/sale.jpg" alt=""  width="100%;" height="220px;">
            </div>
                <!--  -->
                <div class="tieu"><h3>Sản Phẩm Khuyến Mãi</h3></div>
                <div class="sanphammoi">
                <?php
                foreach($ran2 as $rand){
                    extract($rand);
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
                <div class="sanphammoi">
                <?php
                foreach($ran as $rand){
                    extract($rand);
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
            <div class="anh_sale">
                <img src="/PHP/huynvph34362_WD18339/img/sale2.jpg" alt=""  width="100%;" height="220px;">
            </div>
            <div class="tieu"><h3>Top 10 Sản Phẩm Yêu Thích</h3></div>
            <div class="sanphammoi">
                <?php
                foreach($ran as $rand){
                    extract($rand);
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
        </section>
    </main>