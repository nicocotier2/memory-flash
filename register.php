<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT . 'partials/head.php'; ?>
<?php require 'utils/database.php'; ?>
<?php $pdo = connectToDbAndGetPdo();?>
<head>

</head>
<body>

    <?php require SITE_ROOT . 'partials/header.php'; ?>
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = tryToRegister($_POST["email"], $_POST["pseudo"], $_POST["motdepasse"], $_POST["confirmerMotdepasse"]);
    
    if (empty($errors)) {
        // L'inscription a réussi
        $message = "Inscription réussie ! Vous pouvez vous connecter maintenant.";
    } else {
        // L'inscription a échoué, afficher les erreurs
        $message = "L'inscription a échoué. Veuillez corriger les erreurs suivantes :<br>" . implode("<br>", $errors);
    }
    }

    function tryToRegister($mail,$pseudo,$motdepasse,$confirmerMotdepasse)
    {
        $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/';

        // Définir des variables pour stocker les erreurs
        $errors = [];

        // Vérifier le format du mail
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Le format du mail n'est pas valide.";
        }

        if (strlen($pseudo) < 4) {
            $errors[] = "Le pseudo doit faire au moins 4 caractères.";
        }

        if (preg_match($passwordPattern, $motdepasse) == 0) {
            $errors[] = "Le mot de passe n'est pas compatible.";
        }

        if ($motdepasse !== $confirmerMotdepasse) {
            $errors[] = "Le mot de passe et la confirmation du mot de passe ne correspondent pas.";
        }

        if ($errors == []) {
            $hashedPassword = password_hash($motdepasse, PASSWORD_BCRYPT);
            $pdo = connectToDbAndGetPdo();

            try {
                $sql = $pdo->prepare("INSERT INTO user(mail, pseudo, mdp) VALUES (:mail, :pseudo, :hashedPassword)");
                $execute = $sql->execute([
                    ":mail" => $mail, ":pseudo" => $pseudo, ":hashedPassword" => $hashedPassword,
                ]);
            } catch (PDOException $e) {
                throw new Exception("Erreur lors de l'insertion des données dans la base de données : ");
            }
        } 

        return $errors;
    }
    ?>
    <section>

        <form action="#" method="post">
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder="email">
            </div>
            <div class="form-group">
                <input type="text" id="pseudo" name="pseudo" required placeholder="pseudo">
            </div>
            <div class="form-group">
                <input type="password" id="motdepasse" oninput="validateMDP()" name="motdepasse" required placeholder="mot de passe">
            </div>
            <div id="strength-bar" style="
                    display: flex;
                    height: 15px;
                    background-color: grey;
                    color: white;
                    width: 250px;
                    margin-left: 360px;
                    margin-top: -25px;
                    ">
                </div>
                <p id="password-strength"></p>
                
            <div class="form-group">
                <input type="password" id="confirmerMotdepasse" name="confirmerMotdepasse" required placeholder="confirmez votre mot de passe">
            </div>
            <input type="submit" value="S'inscrire">
        </form>
        <?php
        if (isset($message)) {
            echo '<div class="message">' . $message . '</div>';
        }
    ?>
    <script>
    function validateMDP() {
        var mdp = document.getElementById("motdepasse").value;
        var bar = document.getElementById("strength-bar");
        var moyenReg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        var eleveReg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/;
        
        if (eleveReg.test(mdp)) {
            bar.style.backgroundColor = "green"; 
            bar.innerHTML = "Strong password"
        } else if (moyenReg.test(mdp)) {
            bar.style.backgroundColor = "orange"; 
            bar.innerHTML = "Medium password"
        } else if (mdp.length > 0) {
            bar.style.backgroundColor = "red";
            bar.innerHTML = "Weak password"
        } else {
            bar.style.backgroundColor = "grey";
            bar.innerHTML = "";
        }
    }
    </script>

    <?php require SITE_ROOT . 'partials/footer.php'; ?>

    <div class="Copyright">
        <p>Copyright © 2023 Tout droits réservés</p>
    </div>
</body>

</html>