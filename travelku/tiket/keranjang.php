<html>

<head>
    <title>Travel Ku | Penyedia Tiket</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>
    <?php
    include "koneksi.php";
    $s = mysqli_query($conn, 'select * from user where username="' . $_SESSION['user'] . '" ');
    $q = mysqli_fetch_array($s);
    $id_user = $q['id_user'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel default">
                    <center>
                        <h1><i class="ion-android-cart"></i> Keranjang Anda</h1>
                        <p>Mohon tunggu Notifikasi dari Admin</p>
                        <b>Nb:</b> <i>sebelum cetak tiket, anda harus mengisi data diri anda.</i><a href="pengaturan.php"><button class="btn waves-effect grey"><i class="ion-ios-settings"></i></button></a>
                    </center>
                </div>
            </div>
            <div class="col s4">
                <?php
                include "koneksi.php";
                $sql = mysqli_query($conn, 'select * from reserv where id_user="' . $id_user . '" ');
                while ($query = mysqli_fetch_array($sql)) {
                ?>
                    <div class="card-panel green">
                        <b class="white-text">Code Booking</b>
                        <p>
                            <?= $query['reserv_code']; ?>
                        </p>
                        <b class="white-text">Status</b>
                        <p>
                            <?php
                            if ($query['status'] == 'Proses') {
                                echo "Proses";
                            } else {
                            ?>
                                <a href="cetak.php?id_reserv=<?= $query['id_reserv']; ?>" target="_blank"><button class="btn waves-effect blue"><i class="ion-android-print"></i></button></a>
                            <?php
                            }
                            ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>