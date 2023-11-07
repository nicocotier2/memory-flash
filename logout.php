<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>
<?php require SITE_ROOT . 'utils/database.php'; ?>

<body>
    <?php require SITE_ROOT. ("partials/header.php"); ?>
    <?php 
        if(isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header("Location: login.php");
            var_dump($_SESSION);
        }
    ?>

    <form method="post" action="">
        <input type="submit" name="logout" value="Déconnexion">
    </form>
    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>