<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>
<?php require 'utils/database.php'; ?>
<?php $pdo = connectToDbAndGetPdo();?>

<body>
    <?php include ("partials/header.php"); ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $message = tryToLogin($_POST["email"], $_POST["motdepasse"]);
    }

    function tryToLogin($email, $motdepasse)
    {

        $message = "Connexion réussie ! Vous êtes connecté.";

        return $message;
    }
    ?>

    <section>
        <br><br>
        <form action="#" method="post">
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" id="motdepasse" name="motdepasse" required placeholder="mot de passe">
            </div>
            <input type="submit" value="Se connecter">
        </form>

        <?php
        if (isset($message)) {
            echo '<div class="message">' . $message . '</div>';
        }
        ?>
    </section>

    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>