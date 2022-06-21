<?php
    include "koneksi.php";

    $id = $_GET['id_trans_type'];
    $desc = $_POST['description'];
    $sql = mysqli_query($conn, 'update type_trans set description="'.$desc.'" where id_trans_type="'.$id.'" ');
    
    if($sql) {
        echo "<script>window.alert('Data berhasil di Edit');window.location.href='type_trans.php';</script>";
    } else {
        echo "<script>window.alert('Data Gagal');window.location.href='type_trans.php';</script>";
    }
?>
