<?php require '../../utils/common.php'; ?>

<?php require '../../utils/database.php'; ?>
<?php $pdo = connectToDbAndGetPdo();?>
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
    <table id="scoresTable" class="res">
            <thead class><tr class="sc"><th class="sc">SCORE</th><th class="sc">difficulté</th><th class="sc">nom du jeu</th><th class="sc">Pseudo</th></tr></thead>
           
            <tbody class>
            <?php
                $pdo = connectToDbAndGetPdo();
                $pdoStatement = $pdo->prepare('SELECT * from score s 
                INNER JOIN game g ON s.id_game = g.id_game 
                INNER JOIN user u ON s.id_user = u.id_user');
                $pdoStatement->execute();
                $scores = $pdoStatement->fetchAll();?>
                <?php foreach ($scores as $score): ?>
                    <tr class="sc">
                        <td><?php echo $score->score; ?></td>
                        <td><?php echo $score->difficulty; ?></td>
                        <td><?php echo $score->game_name; ?></td>
                        <td><?php echo $score->pseudo; ?></td>
                    </tr>
                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
    <script>
    function effacerScores() {
        var tableauScores = document.getElementById("scoresTable");
        var tbody = tableauScores.querySelector("tbody");
        tbody.innerHTML = ""; // Effacer le contenu du corps du tableau
    }
    
</script>
</body>
</html>
