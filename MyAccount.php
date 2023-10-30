<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <header class="header">
        <nav>
            <div class="listNav1"><a href="index.html">Celestial Memory</a></div>
                <ul class="listNav2">
                <li><a href="index.php" class="barColor">Accueil</a></li>
                <li><a href="jeux.php" class="barColor">Jeu</a></li>
                <li><a href="score.php" class="barColor">Scores</a></li>
                <li><a href="contact.php" class="barColor">Nous contacter</a></li>
                <li><a href="login.php" class="barColor">Connexion</a></li>
                <li><a href="register.php" class="barColor">S'inscrire</a></li>
                <li><a href="MyAccount.php" class="barColor">myAccount</a></li>
                </ul>
        </nav>
        <div class="main-title"><h1>MY ACCOUNT</h1></div>
    </header>
    <br><br><br><br><br><br><br><br>
    <section class="sec">
        <fieldset class="field3">
            <legend>Changer d'email sur mon compte</legend>   
            <br>         
            <div>
                <label for="Old mail">Rentre ton ancien mail</label>
                <input type="input" name="Old mail" value="Ancien mail" />
            </div>
            <div>
                <label for="New mail">Rentre ton nouveau mail</label>
                <input type="input" name="New mail" value="Nouveau mail" />
            </div>
            <div>
                <label for="pass">Entre ton mot de passe</label>
                <input type="password" name="pass" required />
            </div>
        </fieldset>
    </section>
    <section class="sec">
        <fieldset class="field3">
            <legend>Changer de mot de passe</legend>   
            <br>         
            <div>
                <label for="Old pass">Ancien mot de passe :</label>
                <input type="password" name="Old pass"/>
            </div>
            <div>
                <label for="New pass">Nouveau mot de passe :</label>
                <input type="password" name="New pass" />
            </div>
            <div>
                <label for="confirm">Confirmer mot de passe:</label>
                <input type="password" name="confirm" required />
            </div>
        </fieldset>
    </section>
    <footer>
        <div class="footer">
        <h2>Information</h2><br>
        <p>Voici les informations nécessaires pour pouvoir obtenir des informations</p><br>
        <ul class="footerList1">
            <li><span>Tel:</span> 01 18 28 90 47</li><br>
            <li><span>Email:</span> support@celestialmemory.com</li><br>
            <li><span>Location:</span> Paris</li>
        </ul>
        </div>
        <div class="footer2">
        <h2>Celestial Memory</h2><br>
        <ul class="footerList2">
            <li><span>Jouer !</span></li><br>
            <li><span>Les scores</span></li><br>
            <li><span>Nous contacter</span></li>
        </ul>
        </div>
    </footer>
    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>