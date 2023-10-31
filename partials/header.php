<!-- <div class="firstLandingPage">
    <nav>
        <div class="listNav1"><a href="<?= PROJECT_FOLDER ?>index.php">Celestial Memory</a></div>
        <ul class="listNav2">
        <li><a href="<?= PROJECT_FOLDER ?>index.php" class="barColor">Accueil</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>../../../jeux.php" class="barColor">Jeu</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>score.php" class="barColor">Scores</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>../../../contact.php" class="barColor">Nous contacter</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>../../../login.php" class="barColor">Connexion</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>../../../register.php" class="barColor">S'inscrire</a></li>
        <li><a href="<?= PROJECT_FOLDER ?>../../../MyAccount.php" class="barColor">myAccount</a></li>
        </ul>
    </nav>
    <div class="bothTitle">
    <div class="main-title"><h1>BIENVENUE DANS <br>NOTRE STUDIO !</h1></div>
    <div class="underMain">
        <p>Venez challengez les cerveaux les plus agiles !</p>
    </div><br>
    <input type="submit" value="JOUER !" href="<?= PROJECT_FOLDER ?>jeux.php">
    </div>
</div>  -->

<!-- fonction pour vérifier la page où on se trouve-->
<?php
function getPage(): string {
    $pageName = $_SERVER['SCRIPT_NAME'];
    return $pageName;
    
}
getPage()
?>
<!-- fonction pour choisir la classe à affecter -->


<header class="header">
    <nav>
        <div class="listNav1"><a href="<?= PROJECT_FOLDER ?>index.php">Celestial Memory</a></div>
            <ul class="listNav2">
            <li><a href="<?= PROJECT_FOLDER ?>index.php" class="barColor">Accueil</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>games/memory/" class="barColor">Jeu</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>games/memory/score.php" class="barColor">Scores</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>contact.php" class="barColor">Nous contacter</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>login.php" class="barColor">Connexion</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>register.php" class="barColor">S'inscrire</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>MyAccount.php" class="barColor">myAccount</a></li>
            </ul>
    </nav>
    <?php
    $test = getPage();
    if ($test == "/memory-flash/index.php")
        echo"<div class=\"main-title2\"><h1>accueil</h1></div>";
    elseif ($test == "/memory-flash/games/memory/index.php")
        echo "<div class=\"main-title2\"><h1>a vous de jouer</h1></div>";
    elseif ($test == "/memory-flash/games/memory/score.php")
        echo "<div class=\"main-title2\"><h1>les scores</h1></div>";
    elseif ($test == "/memory-flash/contact.php")
        echo "<div class=\"main-title2\"><h1>contactez nous</h1></div>";
    elseif ($test == "/memory-flash/login.php")
        echo "<div class=\"main-title2\"><h1>connectez vous</h1></div>";
    elseif ($test == "/memory-flash/register.php")
        echo "<div class=\"main-title2\"><h1>inscrivez vous vous</h1></div>";
    else
        echo "<div class=\"main-title2\"><h1>votre compte</h1></div>";
    ?>
    
    
    
    
    
</header>
