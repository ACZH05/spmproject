<?php
$id = "";
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
    require_once "regAdmin.php";
    $sql = "INSERT INTO admin (idAdmin, kataLaluanAdmin) VALUE ('$id','$regPassword')";
    mysqli_query($con ,$sql);
    echo "<script>alert('Berjaya Daftar');document.location='/SPM PROJECT/SESSION ADMIN/DAFTAR/pendaftaran.php'</script>";
}else{
    header('Location: registerPeserta.php?error=Incorrect username or password');
}

?>