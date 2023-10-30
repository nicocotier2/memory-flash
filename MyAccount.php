<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>

<body>
<?php require SITE_ROOT.'partials/header.php'; ?>

    <br><br><br><br><br><br><br><br>
    <section class="sec">
        <fieldset class="field3">
            <legend>Changer d'email sur mon compte</legend>   
            <br>         
            <div>
                <label for="Old mail">Rentre ton ancien mail</label>
                <input type="input" name="Old mail" value="Ancien mail" />
            </div>
            <div>
                <label for="New mail">Rentre ton nouveau mail</label>
                <input type="input" name="New mail" value="Nouveau mail" />
            </div>
            <div>
                <label for="pass">Entre ton mot de passe</label>
                <input type="password" name="pass" required />
            </div>
        </fieldset>
    </section>
    <section class="sec">
        <fieldset class="field3">
            <legend>Changer de mot de passe</legend>   
            <br>         
            <div>
                <label for="Old pass">Ancien mot de passe :</label>
                <input type="password" name="Old pass"/>
            </div>
            <div>
                <label for="New pass">Nouveau mot de passe :</label>
                <input type="password" name="New pass" />
            </div>
            <div>
                <label for="confirm">Confirmer mot de passe:</label>
                <input type="password" name="confirm" required />
            </div>
        </fieldset>
    </section>
    <?php require SITE_ROOT.'partials/footer.php'; ?>

    <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>
