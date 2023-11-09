<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT . 'partials/head.php'; ?>
<?php require SITE_ROOT . 'utils/database.php'; ?>
<body>
<?php require SITE_ROOT . 'partials/header.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = tryToUpdateProfile($_POST["OldPass"], $_POST["NewPass"], $_POST["pass"]);
}

function tryToUpdateProfile($newPassword) {
    $errors = [];

    if (strlen($newPassword) < 8) {
        $errors[] = "Le nouveau mot de passe doit faire au moins 8 caractères.";
    }

    if (empty($errors)) {
        $pdo = connectToDbAndGetPdo();

        try {
            $userId = $_SESSION['user']['id'];
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $pdo=connectToDbAndGetPdo();
            $sql = $pdo->prepare("UPDATE user SET mdp = :newPassword WHERE id_user = :id_user");
            $execute = $sql->execute([
                ":newPassword" => $hashedPassword,
                ":id_user" => $userId,
            ]);

            if ($execute) {
                return "Modification du profil réussie !";
            } else {
                return "Échec de la modification du profil. Veuillez réessayer.";
            }
        } catch (PDOException $e) {
            return "Erreur lors de la modification du profil : " . $e->getMessage();
        }
    } else {
        return "Échec de la modification du profil. Veuillez corriger les erreurs suivantes :<br>" . implode("<br>", $errors);
    }
}
?>

<section>
        <br><br>
        <?php $userId = $_SESSION['user']['id'];
        $path = 'userFiles/' . $userId . '/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($_FILES['profile_picture'])) {
            $file = $_FILES['profile_picture'];
            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
                $newProfilePictureFilename = 'profile.' . $fileExtension;
                $targetPath = $userfilesPath . $newProfilePictureFilename;
            }
        } else {
            echo 'Erreur avec le fichier sélectionné';
        }
        ?>
        <div style="height:5%; display: flex; justify-content: center; margin-bottom:5%; margin-top: 5%; margin-bottom:10%;">
            <?php if (file_exists('userFiles/'.$userId.'/')):?>
                <img style="width: 35%;" src="userFiles/10/profile-picture.jpg">
            <?php else:?>-->
                <img src="Assets/profile.png">
            <?php endif; ?>
            <div style="display: flex; flex-direction:column; align-items:center; margin-left: 5%; margin-top: 5%">
                <h1 style="color: white;">Ma photo de profil</h1>
                <form action="upload_profile_picture.php" method="post" enctype="multipart/form-data">
                    <input style="margin-left:30%; margin-top: 25%; margin-bottom:5%;" type="file" name="profile_picture" accept="image">
                    <input style="font-size: larger;" type="submit" value="Changer de photo de profil">
                </form>
            </div>
        </div>
        <form action="#" method="post">
            <div class="form-group">
            <input type="password" name="OldPass" required placeholder="Entrez votre mot de passe actuel">
            </div>
            <div class="form-group">
            <input type="password" name="NewPass" required placeholder="Entrez votre nouveau mot de passe">
            </div>
            <div class="form-group">
            <input type="password" name="pass" required placeholder="Répétez votre nouveau mot de passe">
            </div>
            <input type="submit" value="Sauvegarder le changement">
        </form>
        <?php
        if (isset($message)) {
            echo '<div class="message">' . $message . '</div>';
        }
        ?>
</section>

<?php require SITE_ROOT . 'partials/footer.php'; ?>

<div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>