<?php
require_once "/xampp/htdocs/PHP/huynvph34362_WD18339/model/pdo.php";
//crud sản phẩm
function add($tensp, $gia, $link_anh, $loaisp, $mota) {
    // global $conn;
    $sql = "INSERT INTO san_pham (ten_sp, don_gia, image, ma_loai, mo_ta) VALUES (:ten_sp, :don_gia, :image, :ma_loai, :mo_ta)";
    $params = array(
        ':ten_sp' => $tensp,
        ':don_gia' => $gia,
        ':image' => $link_anh,
        ':ma_loai' => $loaisp,
        ':mo_ta' => $mota
    );
    pdo_execute1($sql, $params);
}
function sua($tensp, $gia, $link_anh, $loaisp, $mota, $id){
    $sql=("UPDATE san_pham SET ten_sp = '$tensp', don_gia='$gia',image='$link_anh',ma_loai='$loaisp',mo_ta='$mota'  WHERE ma_sp = $id");
    pdo_execute_up($sql);
}
function suanot($tensp, $gia, $loaisp, $mota, $id){
    $sql=("UPDATE san_pham SET ten_sp = '$tensp', don_gia='$gia',ma_loai='$loaisp',mo_ta='$mota'  WHERE ma_sp = $id");
    pdo_execute_up($sql);
}
function xoa($id){
    $sql="DELETE FROM san_pham WHERE ma_sp = $id";
    pdo_query($sql);
}
//lấy && sửa loại
function editloai($id){
    $sql="SELECT * FROM loaisp WHERE ma_loai=$id";
    return pdo_query_one($sql);
}
function edit($new, $id){
    $sql="UPDATE loaisp SET ten_loai='$new' WHERE ma_loai=$id";
    pdo_execute_up($sql);
}
function xoa_loai($id){
    $sql="DELETE FROM loaisp WHERE ma_loai = $id";
    pdo_execute($sql);
}
function add_loai($loai){
    $sql = "INSERT INTO loaisp (ten_loai) VALUES (:loai)";
    $params = array(
        ':loai' => $loai
    );
    pdo_execute1($sql, $params);
}
//tìm kiếm
function load_id($kyw,$iddm){
    $sql="SELECT * FROM san_pham ";
    if ($kyw!="") {
        $sql.="WHERE ten_sp LIKE '%$kyw%'";
    }
    if ($iddm>0) {
        $sql.="WHERE ma_loai = $iddm";
    }
    $sql.=" ORDER BY ma_sp DESC";
    $LOAD_TK= pdo_query($sql);
    return $LOAD_TK;
}
?>