<?php
session_start();
require_once "../model/lqsanpham.php";

$loi=[];
if (isset($_POST['tk'])) {
    $tk=$_POST['tk'];
    $mk=$_POST['mk'];
    if (empty($tk)) {
      $loi[]="Vui lòng nhập tài khoản";
        goto thoi;
    }
    if (empty($mk)) {
      $loi[]="Vui lòng nhập mật khẩu";
      goto thoi;
    }
    if (strlen($tk)<10) {
        $loi[]="Tài khoản phải nhập ít nhất 10 kí tự";
        goto thoi;
    }
    $taikhoan=taikhoan($tk,$mk);
    if (empty($loi)) {
        if (!empty($taikhoan)) {
            extract($taikhoan);
            $_SESSION['avt']=$avata;
            $_SESSION['sdt']=$so_dien_thoai;
            $_SESSION['name']=$ho_ten;
            $_SESSION['date']=$kich_hoat;
            $_SESSION['ma_kh']=$ma_kh;
            // var_dump($taikhoan);
            $_SESSION['login']=$tk;
            $link= "/index.php";
            $_SESSION['loi']="Đăng nhập thành công";
            // echo $link;
              header("Location: ../$link");
        }elseif ($tk=='adminnnnnn'&& $mk=='1234') {
            $_SESSION['login']=$tk;
            $_SESSION['loi']="Đăng nhập thành công";
            header("Location: admin.php");
        }else{
        $loi[]="Tài Khoản Không Tông Tại";
        goto thoi;
    }
    }
}
thoi:
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/dn.css">
</head>
<body>
    <div class="index">
        <h1>Đăng Nhập</h1><br>
        <?php echo "<h2 class='loidn'>". implode($loi)."</h2>" ?>
        <form action="" method="post">
            <i  class="fa-solid fa-user"></i>
            <input class="min" type="text" placeholder="Tên tài khoản" name="tk"><br>
            <i class="fa-solid fa-lock"></i>
            <input class="min" type="password" placeholder="Mật khẩu" name="mk"><br>
             <div class="hau">
                <input type="checkbox" class="check"> <p>Nhớ Mật Khẩu</p>
                <a href="">Quên Mật Khẩu ?</a>
             </div>
             <button type="submit" >Đăng Nhập</button><br>
             <button ><a href="../php/dangki.php">Đăng Kí</a></button>
             <div class="khac">
                Đăng Nhập Bằng <br>
                <a href=""><i class="fa-brands fa-square-facebook" style="color: #3b5998; font-size: 55px;"></i></a>
                <a href=""><i class="fa-brands fa-google"></i></a>
             <a href="">   <i class="fa-brands fa-apple" style="color: white; font-size: 60px;"></i></a>
             </div>
        </form>
      

    </div>
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"> </script>
</body>
</html>