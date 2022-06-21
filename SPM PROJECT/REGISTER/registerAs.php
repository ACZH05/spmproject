<!DOCTYPE html>
<html>
    <head>
        <title>DAFTAR SEBAGAI</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                background: url("../IMG_2830.jpg");
                background-size: cover;
                background-position: center;
                height: 100vh;
                font-family : cursive;
            }

            .background {
                position: absolute;
                background: rgb(255, 255, 255);
                width: 350px;
                height: 100%;
            }

            h1 {
                text-align: center;
            }

            .choose {
                top: 200px;
                background-color: white;
                border: 1px solid #adadad;
                color: #adadad;
                width: 175px;
                height: 150px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                align-items: center;    
                font-size: 16px;
                cursor: pointer;
                margin: 20px;
            }

            .three {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
        </style>
    </head>

    <body>
        <div class="background">
            <h1>DAFTAR SEBAGAI</h1>
            <div class="three">
                <a href="registerPeserta.php" class="choose">PESERTA</a>
                <a href="registerHakim.php" class="choose">HAKIM</a>
                <a href="registerAdmin.php" class="choose">ADMIN</a>
            </div>
        </div>
    </body>
</html>