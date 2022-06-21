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
                    <h3><i class="ion-edit"></i> Edit Transportation</h3>
                    <?php include "koneksi.php";
                    $id = $_GET['id_trans'];
                    $sql = mysqli_query($conn, 'select * from trans where id_trans="' . $id . '" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <form method="post" action="trans_uu.php?id_trans=<?= $dtt['id_trans']; ?>">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $code = $c;
                            ?>
                            <input type="text" name="codec" id="code" value="<?= $code; ?>" class="btn disabled">
                            <label for="code">Code</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="description" id="desc" value="<?= $dtt['description']; ?>" required>
                            <label for="desc">Description</label>
                        </div>
                        <div class="input-field">
                            <?php $r = range(1, 1);
                            shuffle($r);
                            $b = implode($r);
                            $seat = $b; ?>
                            <input type="text" name="seatc" id="seat" value="<?= $seat; ?>" class="btn disabled">
                            <label for="seat">Seat</label>
                        </div>
                        <select name="id_trans" class="browser-default">
                            <option selected disabled>Type: </option>
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($conn, "SELECT * FROM type_trans ");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['id_trans'] ?>"><?php echo $row['description'] ?></option>
                            <?php } ?>
                        </select>
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