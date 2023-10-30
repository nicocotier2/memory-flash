<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory - Score</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
</head>
<body class="page">
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
        <div class="main-title"><h1>SCORES</h1></div>
    </header>
    <br><br><br>
    <section class="secc">
            <fieldset class="field">
                <legend>Choisis la difficulté souhaitée</legend>            
                    <br><div class="op">
                        <input type="radio" id="easy" name="difficulté" value="easy" />
                        <label for="easy">Easy</label>
                    </div>
                    <br><div class="op">
                        <input type="radio" id="medium" name="difficulté" value="medium" />
                        <label for="medium">Medium</label>
                    </div>
                    <br><div class="op">
                        <input type="radio" id="hard" name="difficulté" value="hard" />
                        <label for="hard">Hard</label>
                    </div>
            </fieldset>
            <fieldset class="field">
                <legend>Pseudo du joueur:</legend>            
                <div>
                    <br><br><label for="pseudo">De qui souhaitez vous voir les scores ?</label><br>
                    <input type="text" id="pseudo" name="pseudo"><input type="button" value="RECHERCHER">
                </div>
            </fieldset>
    </section>
    <div>
        <table class="res">
            <thead class><tr class="sc"><th class="sc">RESULTAT</th><th class="sc">Nom du joueur</th></tr></thead>
            <tbody class>
                <tr class="sc"><th class="sc">Jeu</th><td>(insérer nom du jeu)</td></tr>
                <tr class="sc"><th class="sc">Difficulté</th><td>(insérer difficulté)</td></tr>
                <tr class="sc"><th class="sc">Nom</th><td>(insérer nom du joueur)</td></tr>
                <tr class="sc"><th class="sc">Pseudo</th><td>(insérer pseudo)</td></tr>
                <tr class="sc"><th class="sc">High score</th><td>(insérer le score)</td></tr>      
            </tbody>
        </table>
    </div>
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