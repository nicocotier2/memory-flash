<?php
require_once '../../utils/common.php';
require SITE_ROOT .'utils/database.php';
$pdo= connectToDbAndGetPdo();
$pdoUpdateGp = $pdo->prepare('UPDATE game SET games_played = games_played + 1');
$pdoUpdateGp->execute();
?>