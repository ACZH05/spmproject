<?php
session_start();
$regUname = $_POST["uname"];
$regName = $_POST["nm"];
$regNoTel = $_POST["Tel"];
$regPassword = $_POST["pwd"];
$regConfirmPassword = $_POST["confirmPwd"];


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

if ($regPassword == $regConfirmPassword) {
    $sql = "INSERT INTO peserta (idPeserta, namaPeserta, noTel, kataLaluan) VALUE ('$regUname','$regName','$regNoTel','$regPassword')";
    mysqli_query($con ,$sql);
    echo "<script>alert('Berjaya Daftar');document.location='/SPM PROJECT/LOGIN/index.php'</script>";
}else{
    header('Location: registerPeserta.php?error=Incorrect username or password');
}


?>