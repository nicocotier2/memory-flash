<?php require 'utils/common.php'; ?>

<!DOCTYPE html>

<html lang="en">
<?php require SITE_ROOT.'partials/head.php'; ?>
<?php require SITE_ROOT.'utils/database.php'; 
?>
<?php $pdo = connectToDbAndGetPdo();?>

<body>
    <?php include ("partials/header.php"); ?>
    
    <section>
        <div class="generalBox">
            <div class="boxItem">
                <div class="colorItem">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                        <p class="paraf">06 54 18 23 38</p>
                    </div>
                </div>
                <div class="colorItem"><div class="icon"><i class="fa-solid fa-envelope"></i><p class="paraf">support@celestialmemory.com</p></div></div>
                <div class="colorItem"><div class="icon"><i class="fa-solid fa-location-dot"></i><p class="paraf">Paris</p></div></div>
            </div>
        </div>

            <form action="#" method="post">
                <div class="form-group">
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" id="name" name="name" required placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="text" id="text" name="text" required placeholder="Sujet">
                </div>
                <div class="form-group">
                    <input type="text" id="text" name="text" required placeholder="Message">
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </section> 


        <?php require SITE_ROOT.'partials/footer.php'; ?>

            <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>

</body>
</html>
