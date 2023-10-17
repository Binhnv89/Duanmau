<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/heder.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/flex.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/product.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/footer.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/ctsp.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/taikhoan.css">
    <!-- <link rel="stylesheet" href="./css/admin/progress.css">
    <link rel="stylesheet" href="./css/admin/style.css"> -->
    <script>
        var time = 2500;
        var i = 0;
        var chuoianh = [];
        chuoianh[0]='/PHP/huynvph34362_WD18339/img/bane1.png'
        chuoianh[1]='/PHP/huynvph34362_WD18339/img/bn2.png'
        chuoianh[2]='/PHP/huynvph34362_WD18339/img/bn3.png'
        function atuanh() {
            document.anh.src = chuoianh[i];
            if (i<chuoianh.length - 1) {
                i++;
            }else{
                i=0;
            }
            setTimeout("atuanh()", time);
        }
        window.onload=atuanh;
    </script>
   
</head>

<body>
    <header>
        <div class="index">
           <?php
           if(isset($_SESSION['login'])){
            $tk=$_SESSION['login'];
            $hoi = 'onclick="return confirm(\'Bạn Có Muốn đăng xuất không??\')"';
             echo " <p>Chào Mừng <a href='./index.php/?act=ttcn'><strong>".$tk."</strong></a>  Đến Với AOV !</p>";
             echo '<a ' . $hoi . ' href="./index.php/?act=dx" class="dxphp">Đăng xuất</a>';
        }else{
            echo '<p>Bạn chưa đăng nhập, hãy vào trang : <a href="/PHP/huynvph34362_WD18339/php/dangnhap.php" class="dxphp">Đăng nhập</a></p>';
           
        }
           ?>
           <div class="lienhe">
            <a href=""><i class="fa-brands fa-square-facebook"></i></a>
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-apple"></i></a>
           </div>
        </div>
        <hr>
        <div class="box">
            <img src="/PHP/huynvph34362_WD18339/img/zyro-image.png" alt="">
            <p class="name">AOV SNEAKER</p><br>
            
            <p class="phu">Thế Giới Giày Của Bạn</p>
            <input type="text" placeholder="Tìm Kiếm ..."> <button>Tìm Kiếm</button>
           <div class="giohang">
            <i class="fa-solid fa-cart-shopping" ></i>
            <a href="">Giỏ Hàng</a>
           </div>
        </div>
    </header>
    <nav>
     <div class="menu">
     <ul >
     <i class="fa-solid fa-house-chimney" style="color: black;"></i>
            <li><a href="/PHP/huynvph34362_WD18339/index.php">Trang Chủ</a></li>
            <li><a href="">Về Chúng Tôi</a></li>
            <li><a href="">Sản Phẩm</a>
            <ul class="sub">
                <?php
                foreach($loaisp as $loai){
                    extract($loai);
                    echo'<li><a href="">'.$ten_loai.'</a></li> ';
                }
                ?> 
            </ul>
            <li><a href="">Bảo Hành</a>
            <li><a href="">Liên Hệ</a></li>
        </ul>
        <div class="hot">
        <i class="fa-solid fa-phone-volume"></i><p>Hot Line : 123456789 </p>
        </div>
     </div>
    </nav>
    <!-- banner -->
    <section class="banner">
    <img name ="anh" src="/PHP/huynvph34362_WD18339/img/bane1.png" alt="" width="100%" height="400px">
    </section>