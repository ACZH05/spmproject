<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if (!$_SESSION['userLogin']) {
        header("location: http://localhost/SPM%20PROJECT/LOGIN/index.php");
        die();
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN UTAMA</title>
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../SESSION HAKIM/hakim.css">
    <?php
    require('../connect.php');

    $sql = "SELECT * FROM peserta";
    $result = mysqli_query($con, $sql);

    ?>
</head>

<body>
    <nav>
        <label>Sistem Pengurusan Kuiz Matematik ALFRED</label>
        <div class="nav-link">
            <ul>
                <li><a href="../SESSION%20ADMIN/lamanUtama.php">LAMAN UTAMA</a></li>
                <li><a href="../SESSION%20ADMIN/laporan.php">LAPORAN KEPUTUSAN & KEDUDUKAN</a></li>
                <li><a href="../SESSION%20ADMIN/penyerahan.php">PENYERAHAN MARKAH</a></li>
                <li><a href="../SESSION%20ADMIN/DAFTAR/pendaftaran.php">PENDAFTARAN PESERTA/HAKIM</a></li>
                <li><a href="../SESSION%20ADMIN/senaraiHakim.php">SENARAI HAKIM</a></li>
                <li class="logout"><a href="../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
            </ul>
        </div>
    </nav>
    <main id="swup" class="transition-fade">
        <div class="box">
            <div class="input">
                <?php if (isset($_GET['error'])) { ?>
                    <label class="error"><?php echo $_GET['error']; ?></label>
                <?php } ?>
                <form action="system.php" method="POST">
                    <div class="textfield">
                        <label>ID</label><br>
                        <input list="option" name="uname">
                        <datalist id="option">
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['idPeserta'] . '">' . $row['idPeserta'] . '</option>';
                            } ?>
                        </datalist>
                    </div>

                    <br><br>

                    <div class="textfield">
                        <label>Bahagian A</label><br>
                        <input type="number" class="markahA" name="A" max="30">
                        <label class="mark">/30</label><br><br>
                    </div>

                    <div class="textfield">
                        <label>Bahagian B</label><br>
                        <input type="number" class="markahB" name="B" max="30">
                        <label class="mark">/30</label><br><br>
                    </div>

                    <div class="textfield">
                        <label>Bahagian C</label><br>
                        <input type="number" class="markahC" name="C" max="40">
                        <label class="mark">/40</label><br><br>
                    </div>

                    <input type="submit" id="search" name="submit" alt="search" value="MUAT NAIK">
                </form>
            </div>
        </div>
    </main>
    <!-- <nav>
        <label>Sistem Pengurusan Kuiz Matematik ALFRED</label>
        <div class="nav-link">
            <ul>
                <li><a href="../SESSION%20ADMIN/lamanUtama.php">LAMAN UTAMA</a></li>
                <li><a href="../SESSION%20ADMIN/laporan.php">LAPORAN KEPUTUSAN & KEDUDUKAN</a></li>
                <li><a href="../SESSION%20ADMIN/penyerahan.php">PENYERAHAN MARKAH</a></li>
                <li><a href="../SESSION%20ADMIN/DAFTAR/pendaftaran.php">PENDAFTARAN PESERTA/HAKIM</a></li>
                <li><a href="../SESSION%20ADMIN/senaraiHakim.php">SENARAI HAKIM</a></li>
                <li class="logout"><a href="../LOG OUT/LOGOUT.php">LOG KELUAR</a></li>
            </ul>
        </div>
    </nav>
    <form action="system.php" method="POST">
        <label>ID</label><br>
        <select name="ID">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '<option value="' . $row['idPeserta'] . '">' . $row['idPeserta'] . '</option>';
            } ?>
        </select>
        <br><br>
        <label>Bahagian A</label><br>
        <input type="number" class="markahA" name="A" max="30">
        <label>/30</label><br><br>
        <label>Bahagian B</label><br>
        <input type="number" class="markahB" name="B" max="30">
        <label>/30</label><br><br>
        <label>Bahagian C</label><br>
        <input type="number" class="markahC" name="C" max="40">
        <label>/40</label><br><br>
        <input type="submit" id="search" name="submit" alt="search" value="MUAT NAIK">
    </form> -->

</body>

</html>