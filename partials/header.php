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
<?php 
    $pdo=connectToDbAndGetPdo();
    if (isset($_SESSION['user']['id'])) {
        $pdoStatement2 = $pdo->prepare('SELECT * from user WHERE user.id_user = :id_user');
        $pdoStatement2->execute([':id_user' => $_SESSION['user']['id'],]);
        $user = $pdoStatement2->fetch();
        } else {$user = null;}?>
    <nav>
        <div class="listNav1"><a  style="font-size:20px; width: 10%; " href="<?= PROJECT_FOLDER ?>index.php">Celestial Memory</a></div>
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
                <li><a style="display: flex; text-align: center;" href="<?= PROJECT_FOLDER ?>MyAccount.php" class="onPageHighlight">Mon compte<br><?php if($user !== null) {echo $user->pseudo;} ?></a></li>
            <?php elseif(!empty($_SESSION["user"])): ?>
                <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php" class="barColor">Mon compte</a></li>
            <?php endif; ?>
            <?php 
            if (($section = "/memory-flash/logout.php")== $test && !empty($_SESSION["user"]) ):?>
                <li><a href="<?= PROJECT_FOLDER ?>logout.php" class="onPageHighlight">logout</a></li>
            <?php elseif(!empty($_SESSION["user"])): ?>
                <li><a href="<?= PROJECT_FOLDER ?>logout.php" class="barColor">logout</a></li>
            <?php endif; ?>
            </ul>
    </nav>
    
    <?php if ($test == "/memory-flash/index.php"):?>
        <div class="main-title2"><h1 style="width: 100%" >BIENVENUE DANS<br>NOTRE STUDIO !</h1></div>
        <div class= "underMain "><p>Venez challenger les cerveaux les plus agiles</p></div><br><br>
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
    <?php elseif ($test == "/memory-flash/MyAccount.php"):?>
        <div class="main-title2"><h1>Votre compte</h1></div>
    <?php else:?>
        <div class="main-title2"><h1>Déconnection</h1></div>
     <?php endif;?>
    
    <p style="font-size: 30px; margin-bottom: 5%; " > <?php if($user !== null) {echo $user->pseudo;} ?></p>
</header>
