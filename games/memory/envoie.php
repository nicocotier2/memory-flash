<?php
    require_once '../../utils/common.php';
    require SITE_ROOT.'utils/database.php';
    $pdo = connectToDbAndGetPdo();
    $data = $_POST['textarea'];
    //print_r($_SESSION);die();
    $id_joueur = $_SESSION['user']['id'];
    $sql = $pdo->prepare("INSERT INTO message(id_user, id_game, date_send, text_send) VALUES (:id_user, :id_game, :date_send, :text_send)");
    $execute = $sql->execute([
        ":id_user"=> $id_joueur, ":id_game" => 1, ":date_send" => "2023-11-9 16:10:10", "text_send" => $data,
    ]
    );
?>