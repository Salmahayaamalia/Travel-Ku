<?php
    include "koneksi.php";

    $id = $_GET['id_rute'];

    $sql = mysqli_query($conn, 'delete from rute where id_rute="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='rute.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.close();</script>";
}
?>
