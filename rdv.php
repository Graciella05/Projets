<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link rel="stylesheet" href="CSS/rd.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">OPERATEUR</h2>
            </div>
        </div>
        <p>
            Veuillez remplir les champs suivants pour prendre votre rendez-vous :
        </p>
        <div class="content">
            <div class="pic">
                <div class="formulaire">
                    <form action="" method="post">
                        <input type="hidden" name="num_rdv" value="">
                        <p> <input type="text" name="nom" placeholder="Entrer votre nom" required> </p>
                        <p> <input type="text" name="prenom" placeholder="Entrer votre Prénom" required> </p>
                        <p> <select name="choix" required>
                                <option value="" disabled selected hidden>Objet de votre rendez-vous</option>
                                <option value="Achat de carte SIM">Achat de carte SIM</option>
                                <option value="Identification de carte SIM">Identification de carte SIM</option>
                                <option value="Ouverture de compte Flooz">Ouverture de compte Flooz</option>
                                <option value="Deblocage de compte Flooz">Deblocage de compte Flooz</option>
                                <option value=" Expension de compte Flooz">Expension de compte Flooz</option>
                            </select> </p>
                        <center>
                            <p><input type="submit" name="btn" value="Envoyer"></p>
                        </center>
                    </form>
                </div>
            </div>
            <a href="connect.php"><img src="icones/circle-left.svg" title="Retour" alt="precedent"></a>
        </div>
        <div class="foot">
            <footer>
                <center>Copyright &copy; 2023</center>
            </footer>
        </div>
    </div>


</body>

</html>