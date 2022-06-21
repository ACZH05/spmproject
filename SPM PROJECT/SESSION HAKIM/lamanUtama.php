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
    <link rel="stylesheet" href="hakim.css">
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
            <li><a href="/SPM PROJECT/SESSION HAKIM/lamanUtama.php">LAMAN UTAMA</a></li>
            <li><a href="/SPM PROJECT/SESSION HAKIM/penyerahan.php">PENYERAHAN MARKAH</a></li>
            <li class="logout"><a href="../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
        </ul>
        </div>
    </nav>

    <main id="swup" class="transition-fade">
        <div class="container">
            <p class="welcome">SELAMAT DATANG</p>
            <?php
            require('../connect.php');

            $id = $_SESSION['userId'];

            $sql = "SELECT * FROM hakim WHERE idHakim = '$id'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <table class="info">
                <tr>
                    <td>ID</td>
                    <td>: <?php echo $row['idHakim']; ?></td>
                </tr>

                <tr>
                    <td>NAMA</td>
                    <td>: <?php echo $row['namaHakim']; ?></td>
                </tr>
            </table>
        </div>
    </main>
    
</body>
</html>