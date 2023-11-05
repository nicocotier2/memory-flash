<!-- fonction pour vérifier la page où on se trouve-->
<?php
function getPage(): string {
    $pageName = $_SERVER['SCRIPT_NAME'];
    return $pageName;    
}
getPage()
?>

<header class="header">
<?php $test = getPage(); ?>
    <nav>
        <div class="listNav1"><a href="<?= PROJECT_FOLDER ?>index.php">Celestial Memory</a></div>
            <ul class="listNav2">
            <?php
                if (($section = "/memory-flash/index.php")== $test ):?>
                    <li><a href="<?= PROJECT_FOLDER ?>index.php" class="onPageHighlight">Accueil</a></li>
            <?php else: ?>
                    <li><a href="<?= PROJECT_FOLDER ?>index.php" class="barColor">Accueil</a></li>
            <?php endif; ?>
            <?php
            if (($section = "/memory-flash/games/memory/index.php")== $test ):?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/" class="onPageHighlight">Jeu</a></li>
            <?php else: ?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/" class="barColor">Jeu</a></li>
            <?php endif; ?>
            <?php
            if (($section = "/memory-flash/games/memory/score.php")== $test ):?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/score.php" class="onPageHighlight">Scores</a></li>
            <?php else: ?>
                <li><a href="<?= PROJECT_FOLDER ?>games/memory/score.php" class="barColor">Scores</a></li>
            <?php endif; ?>
            <?php
            if (($section = "/memory-flash/contact.php")== $test ):?>
                <li><a href="<?= PROJECT_FOLDER ?>contact.php" class="onPageHighlight">Nous contacter</a></li>
            <?php else: ?>
                <li><a href="<?= PROJECT_FOLDER ?>contact.php" class="barColor">Nous contacter</a></li>
            <?php endif; ?>
            <?php
            if (($section = "/memory-flash/login.php")== $test && empty($_SESSION["user"])):?>
                <li><a href="<?= PROJECT_FOLDER ?>login.php" class="onPageHighlight">Connexion </a></li>
            <?php elseif(empty($_SESSION["user"])): ?>
                <li><a href="<?= PROJECT_FOLDER ?>login.php" class="barColor">Connexion </a></li>
            <?php endif; ?>    
            <?php
            if (($section = "/memory-flash/register.php")== $test ):?>
                <li><a href="<?= PROJECT_FOLDER ?>register.php" class="onPageHighlight">S'inscrire</a></li>
            <?php else: ?>
                <li><a href="<?= PROJECT_FOLDER ?>register.php" class="barColor">S'inscrire</a></li>
            <?php endif; ?>  
            <?php
            if (($section = "/memory-flash/MyAccount.php")== $test && !empty($_SESSION["user"]) ):?>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php" class="onPageHighlight">myAccount</a></li>
            <?php elseif(!empty($_SESSION["user"])): ?>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php" class="barColor">myAccount</a></li>
            <?php endif; ?>
            </ul>
    </nav>
    
    <?php if ($test == "/memory-flash/index.php"):?>
        <div class="main-title2"><h1>BIENVENUE DANS<br>NOTRE STUDIO !</h1></div>
        <div class= "underMain "><p>venez challengez les cerveaux les plus agiles</p></div><br><br>
        <input type="submit" value="JOUER !" href="<?= PROJECT_FOLDER ?>jeux.php"><br><br>
    <?php elseif ($test == "/memory-flash/games/memory/index.php"):?>
        <div class="main-title2"><h1>À vous de jouer !</h1></div>
    <?php elseif ($test == "/memory-flash/games/memory/score.php"):?>
        <div class="main-title2"><h1>Les scores</h1></div>
    <?php elseif ($test == "/memory-flash/contact.php"):?>
        <div class="main-title2"><h1>Nous contacter</h1></div>
    <?php elseif ($test == "/memory-flash/login.php"):?>
        <div class="main-title2"><h1>Connectez vous</h1></div>
    <?php elseif ($test == "/memory-flash/register.php"):?>
        <div class="main-title2"><h1>Créez votre compte</h1></div>
    <?php else:?>
        <div class="main-title2"><h1>Votre compte</h1></div>
    <?php endif;?>
    
    <?php
    $pdo=connectToDbAndGetPdo();
    $pdoStatement2 = $pdo->prepare('SELECT * from user WHERE user.id_user = :id_user');
    $pdoStatement2->execute([
        ':id_user' => $_SESSION['user']['id'],
    ]);
    $user = $pdoStatement2->fetch();
    ?>
    <p> <?php echo $user->pseudo; ?></p>

</header>
