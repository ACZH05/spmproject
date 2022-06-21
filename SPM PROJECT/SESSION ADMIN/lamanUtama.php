<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    if(!$_SESSION['userLogin']){
        header("location: ../SPM PROJEC%20PROJECT/LOGIN/index.php");
        die();
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN UTAMA</title>
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../lamanUtama.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav>
        <label>Sistem Pengurusan Kuiz Matematik ALFRED</label>
        <div class="nav-link">
        <ul>
            <li class="link"><a href="../SESSION%20ADMIN/lamanUtama.php">LAMAN UTAMA</a></li>
            <li class="link"><a href="../SESSION%20ADMIN/laporan.php">LAPORAN KEPUTUSAN & KEDUDUKAN</a></li>
            <li class="link"><a href="../SESSION%20ADMIN/penyerahan.php">PENYERAHAN MARKAH</a></li>
            <li class="link"><a href="../SESSION%20ADMIN/DAFTAR/pendaftaran.php">PENDAFTARAN PESERTA/HAKIM</a></li>
            <li class="link"><a href="../SESSION%20ADMIN/senaraiHakim.php">SENARAI HAKIM</a></li>
            <li class="logout"><a href="../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <p class="welcome">SELAMAT DATANG</p>
        <?php
        require('../connect.php');

        $id = $_SESSION['userId'];

        $sql = "SELECT * FROM admin WHERE idAdmin = '$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <table class="table">
            <tr>
                <td>ID</td>
                <td>: <?php echo $row['idAdmin']; ?></td>
            </tr>
        </table>
    </div>
    
</body>
</html>