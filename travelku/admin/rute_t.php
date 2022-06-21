<?php
    include "koneksi.php";

    $depart = $_POST['depart'];
    $rutf = $_POST['rute_from'];
    $rutt = $_POST['rute_to'];
    $price = $_POST['price'];
    $id_tra= $_POST['id_trans'];

    $sql = mysqli_query($conn, 'INSERT INTO rute (depart, rute_from, rute_to, price, id_trans) VALUES ("'.$depart.'", "'.$rutf.'", "'.$rutt.'", "'.$price.'", "'.$id_tra.'") ');
    if($sql) {
        echo "<script>window.alert('Data berhasil di tambahkan');window.location.href='rute.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.close();</script>";
    }
?>
