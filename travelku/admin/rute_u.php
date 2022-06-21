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
            <div class="col s10">
                <div class="card-panel">
                    <h3><i class="ion-edit"></i> Edit Rute</h3>
                    <?php include "koneksi.php";
                    $id = $_GET['id_rute'];
                    $sql = mysqli_query($conn, 'select * from rute where id_rute="' . $id . '" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <form method="post" action="rute_uu.php?id_rute=<?= $dtt['id_rute']; ?>">
                        <div class="input-field">
                            <p class="grey-text">Depart At</p>
                            <input type="date" name="depart" id="depart" value="<?= $dtt['depart']; ?>">
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_from" id="rutf" value="<?= $dtt['rute_from']; ?>" required>
                            <label for="rutf">Rute From</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_to" id="rutt" value="<?= $dtt['rute_to']; ?>" required>
                            <label for="rutt">Rute To</label>
                        </div>
                        <div class="input-field">
                            <input type="number" name="price" id="price" value="<?= $dtt['price']; ?>">
                            <label for="price">Price</label>
                        </div>
                        <label>Transportasi:</label>
                        <select name="id_trans" class="browser-default">
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($conn, "SELECT * FROM trans ");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['id_trans'] ?>"><?php echo $row['description'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <button class="btn waves-effect green"><i class="ion-edit"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>