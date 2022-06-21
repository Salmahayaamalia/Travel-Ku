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

    <div class="container">
        <div class="row">
            <div class="col s4">
                <div class="card-panel teal white-text">
                    <?php include "koneksi.php";
                    $ss = mysqli_query($conn, 'select * from user where username="' . $_SESSION['user'] . '" ');
                    $ds = mysqli_fetch_array($ss);
                    ?>
                    <h5>Selamat datang,
                        <i><?= $ds['username']; ?>.</i>
                    </h5>
                </div>
            </div>
            <div class="col s8">
                <div class="card-panel white-text green">
                    <h5><b>Book</b>ingan <i class="ion-ios-cart"></i></h5>
                    <a href="keranjang.php" class="white-text">Open</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card-panel default">
                    <center>
                        <h1>Cari Tiket</h1>
                    </center>
                    <form method="post" action="cari.php">
                        <div class="input-field">
                            <input type="text" name="cari" id="price">
                            <label for="price">Cari</label>
                        </div>
                        <button class="btn waves-effect blue"><i class="ion-search"></i> Cari</button>
                    </form>
                </div>
            </div>
            <div class="col s12">
                <b>Nb: </b><i>Sebelum mencari tiket, Pastikan anda sudah mengisi data diri anda</i> <a href="pengaturan.php"><button class="btn waves-effect green"><i class="ion-ios-settings"></i></button></a>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>