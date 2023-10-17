<?php
require_once "../model/pdo.php";
$loi=[];
if (isset($_POST['name'])) {
    $date=date("Y-m-d");
    $name=$_POST['name'];
    $sdt=$_POST['sdt'];
    $mk1=$_POST['mk1'];
    $mk2=$_POST['mk2'];
    if (empty($name)) {
        $loi[]="Vui lòng nhập tài khoản";
        goto thoi;
    }
    if (strlen($name<10)) {
        $loi[]="Tên tài khoản tối da 10  kí tự";
        goto thoi;
    }
    if (empty($sdt)) {
       $loi[]="Vui lòng nhập số điện thoại";
       goto thoi;
    }
    if (empty($mk1)) {
       $loi[]="Vui lòng nhập mật khẩu";
       goto thoi;
    }
    if (empty($mk2)) {
       $loi[]="Vui lòng nhập lại mất khẩu";
       goto thoi;
    }
    if ($mk1 != $mk2) {
        $loi[]="2 mật khẩu không trùng nhau";
        goto thoi;
    }
    if (empty($loi)) {
        try {
            $sx = $conn->prepare("INSERT INTO khach_hang (ho_ten, mat_khau, so_dien_thoai, kich_hoat)
            VALUES (:ho_ten, :mat_khau, :so_dien_thoai, :kich_hoat)");
    
            $sx->bindParam(":ho_ten", $name);
            $sx->bindParam(":mat_khau", $mk1);
            $sx->bindParam(":so_dien_thoai", $sdt);
            $sx->bindParam(":kich_hoat", $date);
    
            $sx->execute();
            header("Location: dangnhap.php");
        } catch (PDOException $e) {
            $loi[] = "Lỗi ghi CSDL: " . $e->getMessage();
        }
       
    }
    
thoi:
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/dk.css">
</head>
<body>
    <div class="box">
        <h1>Đăng Kí</h1>
        <?php echo "<h2 class='loidn'>". implode($loi)."</h2>" ?>
        <form method="post">
            <i  class="fa-solid fa-user"></i>
            <input class="max" type="text" placeholder="Họ và tên" name="name"><br>
            <i class="fa-solid fa-phone"></i>
            <input class="max" type="text" placeholder="Số điện thoại" name="sdt"><br>
            <i class="fa-solid fa-lock"></i>
            <input class="max" type="password" placeholder="Mật khẩu" name="mk1"><br>
            <i class="fa-solid fa-lock"></i>
            <input class="max" type="password" placeholder="Nhập lại mật khẩu" name="mk2"><br>
            <button type="submit">Đăng Kí</button><br>
            <button><a href="dangnhap.php">Đăng Nhập</a></button>
        </form>
    </div>
        <!--  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"> </script>
</body>
</html>