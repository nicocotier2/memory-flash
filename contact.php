<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/055bcde1a6.js" crossorigin="anonymous"></script>
</head>
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


         <footer>
            
            <div class="footer">
            <h2>Information</h2><br>
            <p>Voici les informations nécessaires pour pouvoir obtenir des informations</p><br>
            <ul class="footerList1">
                <li><span>Tel:</span> 01 18 28 90 47</li><br>
                <li><span>Email:</span> support@celestialmemory.com</li><br>
                <li><span>Location:</span> Paris</li>
            </ul>
            </div>
            <div class="footer2">
            <h2>Celestial Memory</h2><br>
            <ul class="footerList2">
                <li><span>Jouer !</span></li><br>
                <li><span>Les scores</span></li><br>
                <li><span>Nous contacter</span></li>
            </ul>
            </div>
            </footer>
            <div class="Copyright"><p>Copyright © 2023 Tout droits réservés</p></div>

</body>
</html>