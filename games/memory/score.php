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
        <table class="res">
            <thead class><tr class="sc"><th class="sc">SCORE</th><th class="sc">difficulté</th><th class="sc">nom du jeu</th><th class="sc">Pseudo</th></tr></thead>
           
            <tbody class>
            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id_score"])) {
            $score = $_POST["id_score"];
            $level = 1; 

            $pdoStatement = $pdo->prepare('INSERT INTO Score (score, difficulty, id_game, id_user) VALUES (:score, :difficulty, :game_id, :user_id)');
    $pdoStatement->execute([
        ':score' => $score,
        ':difficulty' => $level,
        ':game_id' => 1, 
        ':user_id' => 1, 
    ]);
    }
}
?>
                            </tbody>
                        </table>
                    </div>
    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>
