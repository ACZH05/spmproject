<?php
session_start();
$un = $_POST["uname"];
$pass = $_POST["pwd"];
$_SESSION['userId'] = $un;

require('../connect.php');

if (empty($un) || empty($pass)) {
    header('Location: logInPage.php?error=Sila isi kedua-dua medan nama pengguna dan kata laluan!');
}else{
    switch (substr($un,0,1)){
        case 'H':
            $sql = "SELECT * FROM hakim WHERE idHakim = '$un' AND kataLaluanHakim = '$pass'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if ($row['idHakim'] === $un && $row['kataLaluanHakim'] === $pass){
                $_SESSION['userLogin'] = true;
                echo "<script>alert('Berjaya Log Masuk');document.location='/SPM PROJECT/SESSION HAKIM/lamanUtama.php'</script>";
            break;
            }else{
                header('Location: index.php?error=Incorrect username or password');
            }

        case 'A':
            $sql = "SELECT * FROM admin WHERE idAdmin = '$un' AND kataLaluanAdmin = '$pass'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if ($row['idAdmin'] === $un && $row['kataLaluanAdmin'] === $pass){
                $_SESSION['userLogin'] = true;
                echo "<script>alert('Berjaya Log Masuk');document.location='/SPM PROJECT/SESSION ADMIN/lamanUtama.php'</script>";
            break;
            }else{
                header('Location: index.php?error=Incorrect username or password');
            }

        default:
        $sql = "SELECT * FROM peserta WHERE idPeserta = '$un' AND kataLaluan = '$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['idPeserta'] === $un && $row['kataLaluan'] === $pass){
            $_SESSION['userLogin'] = true;
            echo "<script>alert('Berjaya Log Masuk');document.location='/SPM PROJECT/SESSION PESERTA/lamanUtama.php'</script>";
        break;
        }else{
            header('Location: index.php?error=Incorrect username or password');
        }
    }
}

?>