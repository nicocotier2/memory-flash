<?php require '../../utils/common.php'; ?>

<?php require SITE_ROOT.'utils/database.php'; ?>



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
    


session_start();
