<?php
session_start();
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
    require_once "registerHakim.php";
    $sql = "INSERT INTO hakim (idHakim, namaHakim, kataLaluanHakim) VALUE ('$id', '$registerName', '$regPassword')";
    mysqli_query($con ,$sql);
    echo "<script>alert('Berjaya Daftar');document.location='/SPM PROJECT/LOGIN/index.php'</script>";
}else{
    header('Location: registerHakim.php?error=Incorrect username or password');
}

?>