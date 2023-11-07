<?php require 'utils/common.php'; ?> <!-- Inclut un fichier common.php qui peut contenir des fonctions et des configurations communes. -->

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT . 'partials/head.php'; ?> <!-- Inclut un fichier head.php pour les balises <head> HTML. -->
<?php require SITE_ROOT . 'utils/database.php'; ?> <!-- Inclut un fichier database.php qui peut contenir la connexion à la base de données. -->

<body>
    <?php require SITE_ROOT . 'partials/header.php'; ?> <!-- Inclut un fichier header.php qui peut contenir l'en-tête du site. -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") { // Vérifie si la requête HTTP est une requête POST.
        $errors = tryToRegister($_POST["email"], $_POST["pseudo"], $_POST["motdepasse"], $_POST["confirmerMotdepasse"]);

        if (empty($errors)) {
            // L'inscription a réussi
            $message = "Inscription réussie ! Vous pouvez vous connecter maintenant.";
        } else {
            // L'inscription a échoué, afficher les erreurs
            $message = "L'inscription a échoué. Veuillez corriger les erreurs suivantes :<br>" . implode("<br>", $errors);
        }
    }

    function tryToRegister($mail, $pseudo, $motdepasse, $confirmerMotdepasse) {
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

        // Vérifie si la variable $errors est vide, ce qui signifie qu'il n'y a pas d'erreurs détectées.
        if ($errors == []) {
            // Si aucune erreur n'a été détectée, hachons le mot de passe en utilisant l'algorithme BCRYPT.
            $hashedPassword = password_hash($motdepasse, PASSWORD_BCRYPT);
    
            // Ensuite, établissez une connexion à la base de données et obtenez un objet PDO.
             $pdo = connectToDbAndGetPdo();
             try {
                // Prépare une requête SQL pour insérer des données dans la table "user" de la base de données.
                $sql = $pdo->prepare("INSERT INTO user(mail, pseudo, mdp) VALUES (:mail, :pseudo, :hashedPassword)");
                
                // Exécute la requête en liant les valeurs aux paramètres de la requête.
                $execute = $sql->execute([
                    ":mail" => $mail, ":pseudo" => $pseudo, ":hashedPassword" => $hashedPassword,
                ]);
            } catch (PDOException $e) {
                // En cas d'erreur lors de l'exécution de la requête, lance une exception avec un message d'erreur explicite.
                $errors[]=("Erreur lors de l'insertion des données dans la base de données : " . $e->getMessage());
            }

        }
        return $errors; // <!-- Retourne un tableau d'erreurs après la tentative d'inscription. -->
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
                    color: white;
                    width: 25%;
                    margin-left: 360px;
                    margin-top: -25px;
                    background-color: green;
                    font-size: 12px;
                    border-radius: 15px;
                    justify-content: center;
                "></div>
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
    </section>
    <script>
    function validateMDP() {
        var mdp = document.getElementById("motdepasse").value;
        var bar = document.getElementById("strength-bar");
        var moyenReg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        var eleveReg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/;
        
        if (eleveReg.test(mdp)) {
            bar.style.backgroundColor = "green"; 
            bar.style.width = "25%";
            bar.innerHTML = "Strong password"
        } else if (moyenReg.test(mdp)) {
            bar.style.backgroundColor = "orange"; 
            bar.style.width = "15%";
            bar.innerHTML = "Medium password"
        } else if (mdp.length > 0) {
            bar.style.backgroundColor = "red";
            bar.style.width = "8%"
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