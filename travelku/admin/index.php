<html>

<head>
    <title>Travel Ku | Mode Admin</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <?php include "koneksi.php";
                    $ss = mysqli_query($conn, 'select * from admin where username="' . $_SESSION['admin'] . '" ');
                    $ds = mysqli_fetch_array($ss);
                    ?>
                    <h5>Selamat datang,
                        <i><?= $ds['username']; ?>.</i>
                    </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <div class="card-panel white-text blue">
                    <h5>Type Transportation</h5>
                    <a href="type_trans.php" target="_blank" class="white-text">Open in New Tab</a>
                </div>
            </div>
            <div class="col s8">
                <div class="card-panel white-text red">
                    <h5>Transportation</h5>
                    <a href="trans.php" target="_blank" class="white-text">Open in New Tab</a>
                </div>
            </div>
            <div class="col s8">
                <div class="card-panel white-text green">
                    <h5>Rute</h5>
                    <a href="rute.php" target="_blank" class="white-text">Open in New Tab</a>
                </div>
            </div>
            <div class="col s4">
                <div class="card-panel white-text" style="background-color: #F39C12;">
                    <h5>Reservation</h5>
                    <a href="reserv.php" target="_blank" class="white-text">Open in New Tab</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <h5>User</h5>
                    <a href="user.php" target="_blank">Open in New Tab</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>