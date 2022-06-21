<?php
    include "koneksi.php";

    $id = $_GET['id_trans'];

    $sql = mysqli_query($conn, 'delete from trans where id_trans="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='trans.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.close();</script>";
}
?>
