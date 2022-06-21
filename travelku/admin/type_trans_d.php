<?php
    include "koneksi.php";

    $id = $_GET['id_trans_type'];

    $sql = mysqli_query($conn, 'delete from type_trans where id_trans_type="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='type_trans.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.location.href='type_trans.php';</script>";
}
?>
