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
    <link rel="stylesheet" href="../../navbar.css">
</head>
<body>
    <nav>
        <label>Sistem Pengurusan Kuiz Matematik ALFRED</label>
        <div class="nav-link">
        <ul>
            <li><a href="../lamanUtama.php">LAMAN UTAMA</a></li>
            <li><a href="../laporan.php">LAPORAN KEPUTUSAN & KEDUDUKAN</a></li>
            <li><a href="../penyerahan.php">PENYERAHAN MARKAH</a></li>
            <li><a href="../DAFTAR/pendaftaran.php">PENDAFTARAN PESERTA/HAKIM</a></li>
            <li><a href="../senaraiHakim.php">SENARAI HAKIM</a></li>
            <li class="logout"><a href="../../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
        </ul>
        </div>
    </nav>

    <label>ADMIN/HAKIM/PESERTA: </label>
    <a href="../DAFTAR/regAdmin.php">ADMIN</a>
    <a href="../DAFTAR/regHakim.php">HAKIM</a>
    <a href="../DAFTAR/regPeserta.php">PESERTA</a>

    <div class="registerBox">
        <?php if (isset($_GET['error'])) { ?>
            <label class="error"><?php echo $_GET['error']; ?></label>
            <?php } ?>
        <form action="systemHakim.php" method="POST">
            <div id="textfield">
                <label>ID PENGGUNA</label>
                <span></span>
                <label class="id">
                    <?php
                    $id = "";

                    $servername = "localhost";
                    $username = "root";
                    $password = "";

                    // Create connection
                    $con = new mysqli($servername, $username, $password);
                    // Check connection
                    if ($con->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    mysqli_select_db($con,"spmproject");

                    $sqlDec = "SELECT idHakim FROM hakim ORDER BY idHakim DESC LIMIT 1";
                    $result = mysqli_query($con, $sqlDec);
                    $row = mysqli_fetch_assoc($result);
                    if (empty($row['idHakim'])) {
                        $row['idHakim'] = 'H000';
                    }
                    $id = "H" . substr(str_repeat(0,3).substr($row['idHakim'],1)+1, - 3);
                    echo $id;
                    ?>
                </label>
            </div>

            <div class="textField">
                <input type="text" class= "name" name="nm" autocomplete="off" required>
                <span></span>
                <label>NAMA PENGGUNA</label>
            </div>

            <div class="textField">
                <input type="password" class="password" name="pwd" minlength="6" maxlength="12" required>
                <span></span>
                <label>KATA LALUAN (6-12 watak)</label>
            </div>

            <div class="textField">
                <input type="password" class="confirmPassword" name="confirmPwd" required>
                <span></span>
                <label>ESAHKAN KATA KALUAN</label>
            </div>

            <input type="submit" id="search" name="submit" alt="search" value="" >
        </form>
    
</body>
</html>