<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    if(!$_SESSION['userLogin']){
        header("location: http://localhost/SPM%20PROJECT/LOGIN/index.php");
        die();
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN UTAMA</title>
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="peserta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <script defer src="/SPM PROJECT/node_modules/swup/dist/swup.min.js"></script>
    <script defer src="/SPM PROJECT/script.js"></script>

</head>
<body>
    <nav>
        <label>Sistem Pengurusan Kuiz Matematik ALFRED</label>
        <div class="nav-link">
        <ul>
            <li><a href="/SPM PROJECT/SESSION PESERTA/lamanUtama.php">LAMAN UTAMA</a></li>
            <li><a href="/SPM PROJECT/SESSION PESERTA/laporan.php">LAPORAN KEPUTUSAN & KEDUDUKAN</a></li>
            <li class="logout"><a href="../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
        </ul>
        </div>
    </nav>

    <main id="swup" class="transition-fade">
        <div class="container">
            <p class="welcome">SELAMAT DATANG</p>
            <?php
            require('../connect.php');

            $sql = 'SELECT * FROM peserta WHERE idPeserta = '.$_SESSION['userId'].'';
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <table class="info">
                <tr>
                    <td class="row">ID</td>
                    <td class="row">: <?php echo $row['idPeserta']; ?></td>
                </tr>

                <tr>
                    <td class="row">NAMA</td>
                    <td class="row">: <?php echo $row['namaPeserta']; ?></td>
                </tr>

                <tr>
                    <td class="row">NO. TELEFON</td>
                    <td class="row">: <?php echo 0 . $row['noTel']; ?></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>