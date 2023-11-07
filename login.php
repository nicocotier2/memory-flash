<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>
<?php require SITE_ROOT . 'utils/database.php'; ?>

<body>
    <?php require SITE_ROOT. ("partials/header.php"); ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $message = tryToLogin($_POST["loginMail"], $_POST["loginMotdepasse"]);
    }
    function tryToLogin($loginMail, $loginMotdepasse) {
        $pdo = connectToDbAndGetPdo();
        $loginMail = $_POST["loginMail"];
        $loginMotdepasse = $_POST["loginMotdepasse"];
        $sql = $pdo->prepare("SELECT id_user, mail, mdp FROM user WHERE mail = :mail");
        $sql->execute([':mail' => $loginMail]);
        $user = $sql->fetch(PDO::FETCH_ASSOC);
        var_dump($user);

        if ($user && password_verify($loginMotdepasse, $user["mdp"])) {
            $_SESSION["user"] = [
            'id' => $user['id_user'], 
            'email' => $user['mail']
            ];
            header("Location: MyAccount.php");
            return $message = "Connexion réussie ! Vous êtes connecté.";
        }
        else {
            return $message = "Mail ou mot de passe incorrect.";
        }
    }
    ?>

    <section>
        <br><br>
        <form action="#" method="post">
            <div class="form-group">
            <input type="email" id="email" name="loginMail" required placeholder="email">
            </div>
            <div class="form-group">
            <input type="password" id="motdepasse" name="loginMotdepasse" required placeholder="mot de passe">
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