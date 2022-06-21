<!DOCTYPE html>
<html>
    <head>
        <title>BUAT AKAUN</title>
        <link rel="stylesheet" href="styleRegisterHakim.css?v=<?php echo time(); ?>">
    </head>

    <body>

        <div class="registerBox">
        <h1>DAFTAR</h1>
        <?php if (isset($_GET['error'])) { ?>
            <label class="error"><?php echo $_GET['error']; ?></label>
            <?php } ?>
        <form action="systemHakim.php" method="POST">
            <div id="textfield">
                <label>ID PENGGUNA</label>
                <span></span>
                <label class="id">
                    <?php
                    session_start();
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
        <a href="../LOGIN/index.php" class="login">SUDAH ADA AKAUN?</a>
        </div>
        <p>Photo Taken By Lee Yi Fan <spam class="visit"><a href="https://www.shutterstock.com/g/Yi+Fan+Lee" target="_blank">Visit His Shutterstock</a></spam></p>
    </body>
</html>