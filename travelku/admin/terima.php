<?php
include "koneksi.php";
include "session.php";

$id_reserv = $_GET['id_reserv'];
$status = 'Selesai';

$sql = mysqli_query($conn, 'update reserv set status="'.$status.'" ');
if($sql) {
    echo "<script>window.alert('Transaksi telah Selesai');window.location.href='reserv.php';</script>";
} else {
    echo "<script>window.alert('Terjadi ERROR!!');window.location.href='reserv.php';</script>";
}
?>
