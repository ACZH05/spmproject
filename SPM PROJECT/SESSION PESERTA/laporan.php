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
    <title>LAPORAN KEPUTUSAN & KEDUDUKAN</title>
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
        <table class="laporan">
            <thead>
                <tr class="row">
                    <th class="head">No.</th>
                    <th class="head">NAMA</th>
                    <th class="head">BAHAGIAN A</th>
                    <th class="head">BAHAGIAN B</th>
                    <th class="head">BAHAGIAN C</th>
                    <th class="head">JUMLAH MARKAH</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('../connect.php');

                $sql = "SELECT peserta.namaPeserta, markah.idPeserta, markah.markahA, markah.markahB, markah.markahC, markah.jumlah FROM peserta
                        JOIN markah ON peserta.idpeserta = markah.idpeserta 
                        ORDER BY markah.jumlah DESC";
                $result = mysqli_query($con, $sql);
                $rank = 0;
                $last_score = false;
                $rows = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $rows++;
                    if ($last_score != $row['jumlah']) {
                        $last_score = $row['jumlah'];
                        $rank = $rows;
                    }
                ?>
                    <tr class="row">
                        <td class="column"><?php echo $rank ?></td>
                        <td class="column"><?php echo $row['namaPeserta'] ?></td>
                        <td class="column"><?php echo $row['markahA'] ?></td>
                        <td class="column"><?php echo $row['markahB'] ?></td>
                        <td class="column"><?php echo $row['markahC'] ?></td>
                        <td class="column"><?php echo $row['jumlah'] ?></td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </main>
</body>

</html>