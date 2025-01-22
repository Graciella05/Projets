<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moov Africa inscription</title>
    <link rel="stylesheet" href="CSS/style3.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">OPERATEUR</h2>
            </div>
        </div>
        <div class="content">
            <br>
            <p class="par">Veuillez renseigner les informations suivantes :</p> <br>
            <center>
                <div class="formulaire">
                    <form action="" method="post">
                        <h2>Inscription</h2>
                        <input type="hidden" name="num_ins" value="">
                        <input type="email" name="mail" placeholder="Entrez votre email" required> <br> <br>
                        <!--  Contrôle de 8 caractères minimum -->
                        <input type="Password" name="mtdepasse" placeholder="Entrez votre mot de passe" required> <br> <br>
                        <!--  Contrôle de mot de passe conforme-->
                        <input type="Password" name="confirm" placeholder="Confirmez votre mot de passe" required> <br> <br> <br>
                        <button class="btnn"><a href="connect.php">Valider</a></button>
                    </form>
                </div>
            </center>
        </div>
        <div class="foot">
            <footer>
                <center>Copyright &copy; 2023</center>
            </footer>
        </div>

    </div>
</body>

</html>