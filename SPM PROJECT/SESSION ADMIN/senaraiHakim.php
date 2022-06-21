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
    <title>LAPORAN KEPUTUSAN & KEDUDUKAN</title>
    <link rel="stylesheet" href="../navbar.css">
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

    <table class="table" border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID HAKIM</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require('../connect.php');

            $sql = "SELECT * FROM hakim";
            $result = mysqli_query($con, $sql);
            $rank = 0;
            $last_score = false;
            $rows = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                $rows++;
                if( $last_score!= $row['idHakim'] ){
                  $last_score = $row['idHakim'];
                  $rank = $rows;
                }
                ?>
                <tr>
                    <td><?php echo $rank ?></td>
                    <td><?php echo $row['idHakim'] ?></td>
                    <td><?php echo $row['namaHakim'] ?></td>
                <?php } ?>
                </tr>
        </tbody>
    </table>
    
</body>
</html>