<?php
include "koneksi.php";

$res_code = $_POST['res_code'];
$res_at = $_POST['res_a'];
$res_date = $_POST['res_d'];
$seat = $_POST['seat'];
$depart = $_POST['depart'];
$price = $_POST['price'];
$id_user = $_POST['id_user'];
$id_customer = $_POST['id_customer'];
$id_rute = $_POST['id_rute'];
$status = $_POST['status'];

$sql = mysqli_query($conn, 'INSERT INTO reserv (reserv_code, reserv_at, reserv_date, seat, depart, price, id_user, id_customer, id_rute, status) VALUES ("'.$res_code.'", "'.$res_at.'", "'.$res_date.'", "'.$seat.'", "'.$depart.'", "'.$price.'", "'.$id_user.'", "'.$id_customer.'", "'.$id_rute.'", "'.$status.'") ');
if($sql) {
    echo "<script>window.alert('Sedang dalam Proses, mohon tunggu!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('Gagal');window.location.href='index.php';</script>";
}
?>
