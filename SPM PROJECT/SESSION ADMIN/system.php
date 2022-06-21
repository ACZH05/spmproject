<?php
session_start();
$uname = $_POST['uname'];
$markahA = $_POST['A'];
$markahB = $_POST['B'];
$markahC = $_POST['C'];

require('../connect.php');

$sqlCheck = "SELECT * FROM markah WHERE idPeserta != '$uname'";
$result = mysqli_query($con, $sqlCheck);
$row = mysqli_fetch_assoc($result);

if ($uname == NULL) return header('Location: penyerahan.php?error=ID tidak boleh kosong');

if ($row['idPeserta'] == $uname) return header('Location: penyerahan.php?error=Rekod user tersebut sudah wujud');


$jumlah = $markahA + $markahB + $markahC;
$sql = "INSERT INTO markah (idPeserta,markahA,markahB,markahC,jumlah) VALUE ('$uname','$markahA','$markahB','$markahC','$jumlah')";
mysqli_query($con, $sql);
header("location: ../SESSION ADMIN/penyerahan.php");
