<?php require 'utils/common.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>

<body>
<?php include ("partials/header.php"); ?>

        <section>
            <br><br><form action="#" method="post">
                <div class="form-group">
                    <input type="email" id="email" name="email" required placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" id="motdepasse" name="motdepasse" required placeholder="mot de passe">
                </div>
                <input type="submit" value="S'inscrire">
            </form>
        </section> 

        <?php require SITE_ROOT.'partials/footer.php'; ?>

        <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>
</body>
</html>