<!DOCTYPE html>
<html>
    <head>
        <title>Log Masuk Sistem Pengurusan Kuiz Matematik ALFRED</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <?php
        session_start();
        $_SESSION['userLogin'] = false;
        // if ($_SESSION['registerSuccess'] === TRUE){
        //     '<script>
        //         alert("DAFTAR BERJAYA!");
        //     </script>';

        // }
        // $_SESSION['registerSuccess'] = FALSE;
        ?>
    </head>

    <body>

        <div class="loginBox">
            <h1>LOG MASUK</h1>
            <?php if (isset($_GET['error'])) { ?>
                    <label class="error"><?php echo $_GET['error']; ?></label>
                    <?php } ?>
            <form action="loginSystem.php" method="POST">
                <div class="textField">
                    <input type="text" class= "username" name="uname" required autocomplete="off">
                    <span></span>
                    <label>ID PENGGUNA</label>
                </div>
                <div class="textField">
                    <input type="password" class="password" name="pwd" required>
                    <span></span>
                    <label>KATA LALUAN</label>
                </div>
                <input type="submit" id="search" name="submit" alt="search" value="">
            </form>
            <a href="../REGISTER/registerAs.php" class="register">PENGGUNA KALI PERTAMA?</a>
        </div>
        <p>Photo Taken By Lee Yi Fan <spam class="visit"><a href="https://www.shutterstock.com/g/Yi+Fan+Lee" target="_blank">Visit His Shutterstock</a></spam></p>
    </body>
</html>