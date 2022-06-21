<?php
$registerName = $_POST["nm"];
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
    require_once "regHakim.php";
    $sql = "INSERT INTO hakim (idHakim, namaHakim, kataLaluanHakim) VALUE ('$id', '$registerName', '$regPassword')";
    mysqli_query($con ,$sql);
    echo "<script>alert('Berjaya Daftar');document.location='/SPM PROJECT/SESSION ADMIN/DAFTAR/pendaftaran.php'</script>";
}else{
    header('Location: registerPeserta.php?error=Incorrect username or password');
}

?>