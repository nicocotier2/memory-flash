<?php require '../../utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>

<body class="page">
    <?php require SITE_ROOT.'partials/header.php'; ?>

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
    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>
