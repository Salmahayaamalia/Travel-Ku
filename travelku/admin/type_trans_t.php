<?php
    include "koneksi.php";

    $desc = $_POST['description'];

    $sql = mysqli_query($conn, 'insert into type_trans (description) values("'.$desc.'") ');
    if($sql) {
        echo "<script>window.alert('Data berhasil di tambahkan');window.location.href='type_trans.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.location.href='type_trans.php';</script>";
    }
?>
