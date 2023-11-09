<?php
require '../../utils/common.php';
require SITE_ROOT.'utils/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["score"])) {
        $score = $_POST["score"];
        $level = 1;
        $gameId = 1; 
        $userId = $_SESSION['user']['id']; 

        $pdo = connectToDbAndGetPdo();

        $pdoStatement = $pdo->prepare('DELETE FROM score WHERE id_user = :user_id AND score > :score');
        $pdoStatement->execute([
            ':user_id' => $userId,
            ':score' => $score,
        ]);

        $pdoStatement = $pdo->prepare('INSERT INTO score (score, difficulty, id_game, id_user) VALUES (:score, :difficulty, :game_id, :user_id)');
        $pdoStatement->execute([
            ':score' => $score,
            ':difficulty' => $level,
            ':game_id' => $gameId,
            ':user_id' => $userId,
        ]);

        echo "Score inséré avec succès.";
    } else {
        echo "Score non fourni.";
    }
} else {
    echo "Requête incorrecte.";
}

function getUserId() {

}
?>
