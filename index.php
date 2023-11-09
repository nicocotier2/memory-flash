<?php require 'utils/common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>
<?php require 'utils/database.php'; ?>
<?php
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT COUNT(*) AS UserNb FROM user');
$pdoStatement->execute();
$row = $pdoStatement->fetch();
?>

<?php
$sql = "SELECT game.game_name, user.pseudo, score.difficulty, score.score
FROM score Join game ON score.id_game = game.id_game JOIN user ON score.id_user = user.id_user";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$scores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <?php require SITE_ROOT.'partials/header.php'; ?>

        <div class="secondLandingPage">
            <div class="gamePics">
                <div class="first-image"><img src="<?= PROJECT_FOLDER ?>Assets/jeu.jpeg" alt="jeu"></div>
                <div><img src="<?= PROJECT_FOLDER ?>Assets/bj.jpeg" alt="bj"></div>
                <div><img src="<?= PROJECT_FOLDER ?>Assets/carte.jpeg" alt="carte"></div>
            </div>
        <div class="align">
            <div class="textUnder">
                <div style="margin-right: 18%"><h2><span>01 </span>Never gonna</h2></div>
                <div style="margin-right:18%"><h2><span>02 </span>give you</h2></div>
                <div><h2><span>03 </span>up ! ( ͡° ͜ʖ ͡°)</h2></div>
            </div>
            <div class="latinShit">
                <div style="margin-left: 3%; width: 60%"><p>Ceci est un texte filler. Je pourrais mettre absolument n'importe quoi, une histoire barbante du memory, un vieux rick roll, une blague pas drôle (on dira que ça dépend de l'audience kekw) mais j'ai un peu la flemme (OK j'ai menti).</p></div>
                <div style="margin-left: 6%; width: 55%"><p>À la place, j'aimerais en profiter pour remercier mes camarades qui se sont impliqués dans ce projet avec moi pendant ces 4 semaines. Je suis extrêmement fier de nous et des progrès que nous avons faits ensemble, merci et bravo les gars !</p></div>
                <div style="margin-left: 4.5%; width: 70%"><p>Je n'oublie évidemment pas l'aide de tous les autres membres de cette excellente classe qui nous ont aidé à maintes reprises, que ce soit pour git ou pour le code, ainsi que les PO qui ont fait de leur mieux pour nous épauler dans notre apprentissage (Joachim >>>>>).</p></div>
            </div>
        </div>
        </div> 
        <div class="secondPartOfSecond">
            <div class="otherPics">
                <img src="<?= PROJECT_FOLDER ?>Assets/section.jpg" alt="watch dogs">
                <div class="bigBlock">
                    <div class="">
                        <div class="color-block"><p class="p"><span class="number">310</span> parties jouées</p></div>
                        <div class="color-block"><p class="p"><span class="number">1020</span> joueurs connectés</p></div>
                    </div>
                    <div class="">
                        <div class="color-block"><p class="p"><span class="number">10 sec</span> temps records</p></div>
                        <div class="color-block"><p class="p"><span class="number"><?= $row->UserNb ?></span> joueurs inscrits</p></div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="3emePart">
            <div class="equipe">
                <div><h2>Notre équipe</h2></div><br>
                <div><p>Voici la constitution de l'équipe</p></div>
            </div>
            <div class="illust">
                <div><img src="<?= PROJECT_FOLDER ?>Assets/illust.png" alt="illustration"></div>
            </div>
            <div class="profile">
                <div class="color2"><img src="<?= PROJECT_FOLDER ?>Assets/profile.png" alt="profile" class="prof"></div>
                <div class="color2"><img src="<?= PROJECT_FOLDER ?>Assets/profile.png" alt="profile" class="prof"></div>
                <div class="color2"><img src="<?= PROJECT_FOLDER ?>Assets/profile.png" alt="profile" class="prof"></div>
            </div>
        </div>
        
        <?php require SITE_ROOT.'partials/footer.php'; ?>

        <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>
