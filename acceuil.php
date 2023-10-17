<!DOCTYPE html>
<html>

<head>
  <title>Agora Francia - Accueil</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/acceuil.css">
  <link rel="stylesheet" type="text/css" href="css/header_footer.css">
  <script src="js/acceuil.js"></script>
</head>

<body>
  <div id="header">
    <a href="acceuil.php"><img src="images/logo.jpg" style="width: 250px;"></a>
    <a href="panier.php"><img src="images/panier_achats.jpg"
        style="position: relative; left: 100%; transform: translate(-420%); width: 80px;"></a>
  </div>

  <div id="navbar">
    <a href="acceuil.php">Accueil</a>
    <a href="toutparcourir.php">Tout Parcourir</a>
    <a href="notif.php">Notifications</a>
    <a href="panier.php">Panier</a>
    <a href="profil.php">Votre Compte</a>
    <div id="search-bar">
      <input type="text" placeholder="Rechercher..." />
      <button type="submit">Rechercher</button>
    </div>
  </div>

  <div id="carousel">
    <div class="carousel-images">
      <img src="images/accueil/Image1.jpg" alt="Image 1">
      <img src="images/accueil/Image2.jpg" alt="Image 2">
      <img src="images/accueil/Image3.jpg" alt="Image 3">
      <img src="images/accueil/Image4.jpg" alt="Image 4">
      <img src="images/accueil/Image5.jpg" alt="Image 5">
    </div>
  </div>

  <div id="content">
    <div class="categorie">Sélection du jour</div>
    <div class="carousel-container">
      <div class="carousel">
        <?php
        $conn = new PDO('mysql:dbname=agora_francia;localhost', 'root', NULL, NULL);
        $sql = "SELECT nom_article, prix, photo_article, liens, id_article, vendu FROM article";
        $result = $conn->query($sql);
        $tour = 0;
        while (($row = $result->fetch(PDO::FETCH_ASSOC)) and ($tour < 5)) {
          $vendu = $row['vendu'];
          if ($vendu == 'non') {
            $tour = $tour + 1;
            $nom = $row['nom_article'];
            $photo = $row['photo_article'];
            $prix = $row['prix'];
            $liens = $row['liens'];
            $id_article = $row['id_article'];
            echo "<div class='article-block'><a href='article.php?id=$id_article' style='color: black; text-decoration: none;'>";
            echo "<img src='images/article/$photo'>";
            echo "<h2>$liens</h2>";
            echo "<p class='price'>$prix €</p>";
            echo "<p>$nom</p>";
            echo "</a></div>";
          }
        }
        $conn = null;
        ?>
      </div>
    </div>

    <div class="categorie">Ventes directes</div>
    <div class="carousel-container">
      <div class="carousel">
        <?php
        $conn = new PDO('mysql:dbname=agora_francia;localhost', 'root', NULL, NULL);
        $sql = "SELECT nom_article, prix, photo_article, liens, id_article, vendu FROM article WHERE type_vente = 'directe'";
        $result = $conn->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $vendu = $row['vendu'];
          if ($vendu == 'non') {
            $nom = $row['nom_article'];
            $photo = $row['photo_article'];
            $prix = $row['prix'];
            $liens = $row['liens'];
            $id = $row['id_article'];
            echo "<div class='article-block'><a href='article.php?id=$id' style='color: black; text-decoration: none;'>";
            echo "<img src='images/article/$photo'>";
            echo "<h2>$liens</h2>";
            echo "<p class='price'>$prix €</p>";
            echo "<p>$nom</p>";
            echo "</a></div>";
          }
        }
        $conn = null;
        ?>
      </div>
    </div>

    <div class="categorie">Enchères</div>
    <div class="carousel-container">
      <div class="carousel">
        <?php
        $conn = new PDO('mysql:dbname=agora_francia;localhost', 'root', NULL, NULL);
        $sql = "SELECT nom_article, prix, photo_article, liens, id_article, vendu FROM article WHERE type_vente = 'enchere'";
        $result = $conn->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $vendu = $row['vendu'];
          if ($vendu == 'non') {
            $nom = $row['nom_article'];
            $photo = $row['photo_article'];
            $prix = $row['prix'];
            $liens = $row['liens'];
            $id = $row['id_article'];
            echo "<div class='article-block'><a href='article.php?id=$id' style='color: black; text-decoration: none;'>";
            echo "<img src='images/article/$photo'>";
            echo "<h2>$liens</h2>";
            echo "<p class='price'>$prix €</p>";
            echo "<p>$nom</p>";
            echo "</a></div>";
          }
        }
        $conn = null;
        ?>
      </div>
    </div>

    <div class="categorie">Prix negociables</div>
    <div class="carousel-container">
      <div class="carousel">
        <?php
        $conn = new PDO('mysql:dbname=agora_francia;localhost', 'root', NULL, NULL);
        $sql = "SELECT nom_article, prix, photo_article, liens, id_article, vendu FROM article WHERE type_vente = 'vendeurclient'";
        $result = $conn->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $vendu = $row['vendu'];
          if ($vendu == 'non') {
            $nom = $row['nom_article'];
            $photo = $row['photo_article'];
            $prix = $row['prix'];
            $liens = $row['liens'];
            $id = $row['id_article'];
            echo "<div class='article-block'><a href='article.php?id=$id' style='color: black; text-decoration: none;'>";
            echo "<img src='images/article/$photo'>";
            echo "<h2>$liens</h2>";
            echo "<p class='price'>$prix €</p>";
            echo "<p>$nom</p>";
            echo "</a></div>";
          }
        }
        $conn = null;
        ?>
      </div>
    </div>

  </div>

  <div id="footer">
    <div class="footer-column">
      <h5>Qui sommes-nous ?</h5>
      <a href="maps.php" style="text-decoration: none; color: white;">
        <h5>Nos magasins</h5>
      </a>
      <h5>Recrutement</h5>
      <h5>Presse et actualité</h5>
      <h5>Engagements durables</h5>
    </div>
    <div class="footer-column">
      <h5>La vie de nos produits</h5>
      <h5>Modes de livraison</h5>
      <h5>Retour et échange</h5>
      <h5>Moyens de paiement</h5>
      <h5>Programme de fidélité</h5>
    </div>
  </div>

</body>

</html>