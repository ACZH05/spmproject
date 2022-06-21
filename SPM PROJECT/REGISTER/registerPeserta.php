<!DOCTYPE html>
<html>
    <head>
        <title>BUAT AKAUN</title>
        <link rel="stylesheet" href="styleRegister.css?v=<?php echo time(); ?>">
    </head>

    <body>

        <div class="registerBox">
        <h1>DAFTAR</h1>
    <?php if (isset($_GET['error'])) { ?>
            <label class="error"><?php echo $_GET['error']; ?></label>
            <?php } ?>
        <form action="systemPeserta.php" method="POST">
            <div class="textField">
                <input type="text" class= "username" name="uname" autocomplete="off" maxlength="12" required>
                <span></span>
                <label>ID PENGGUNA (IC Anda Tanpa "-")</label>
            </div>

            <div class="textField">
                <input type="text" class= "name" name="nm" autocomplete="off" required>
                <span></span>
                <label>NAMA PENGGUNA</label>
            </div>

            <div class="textField">
                <input type="tel" class="noTel" name="Tel" required>
                <span></span>
                <label>NOMBOR TELEFON (Tanpa "-")</label>
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