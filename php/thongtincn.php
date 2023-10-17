<div class="right">
                   <div class="hello">
                    <h3>Xin chào Quý Khách</h3>
                    </div>
                    <div class="thongtin">
                        <table border="" class="tabel">
                            <tr>
                                <th><a href="">Thông tin cá nhân</a></th>
                            </tr>
                            <tr>
                                <th><a href="">Thông tin thanh toán</a></th>
                            </tr>
                            <tr>
                                <th><a href="">Quản lý nội dung</a></th>
                            </tr>
                            <tr>
                                <th><a href="">Đổi mật khẩu</a></th>
                            </tr>
                           </table>
                           <div class="canhr">
                            <div class="avta">
                               <?php
                               if ($_SESSION['avt']=null) {
                                echo '<img src="'.$_SESSION['avt'].'" alt="">';
                               }else{
                                echo '<img src="/PHP/huynvph34362_WD18339/img/avt.png" alt="">';
                               }
                               ?> 
                                <div class="avt">
                                    <a href="">Đổi ảnh đại diện <i class="fa-solid fa-images"></i></a>
                                </div>
                           </div>
                           <table class="canhan">
                            <tr>
                                <td>Tài Khoản:</td>
                                <td><?php echo $_SESSION['name'] ?></td>
                                <td>Sửa</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><?php echo $_SESSION['sdt']?></td>
                                <td>Sửa</td>
                            </tr>
                            <tr>
                                <td>Ngày Kích Hoạt</td>
                                <td><?php echo $_SESSION['date']?></td>
                                <td>Sửa</td>
                            </tr>
                            <tr>
                                <td colspan="3">Quyền bảo mật & riêng tư</td>
                          
                            </tr>
                           </table>
                        </div>
                    </div>
                </div>