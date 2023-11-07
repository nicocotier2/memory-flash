<?php require SITE_ROOT.
var passwordField = document.getElementById("motdepasse");

// Ajoutez un écouteur d'événements pour le champ de mot de passe
passwordField.addEventListener("input", updatePasswordStrength);

function updatePasswordStrength() {
    var motDePasse = passwordField.value;
    var xhr = new XMLHttpRequest();

    // Définissez l'URL de votre script PHP qui interagit avec la base de données
    var phpScriptURL = "votre_script_php.php";

    // Créez un objet FormData pour envoyer des données au script PHP
    var formData = new FormData();
    formData.append("motdepasse", motDePasse);

    // Configurez la requête HTTP POST
    xhr.open("POST", phpScriptURL, true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

    // Définissez la fonction de rappel pour gérer la réponse du serveur
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            updateStrength(response.strength);
        }
    };

    // Envoyez la requête HTTP POST avec les données du formulaire
    xhr.send(formData);
}

function updateStrength(strength) {
    // Mettez à jour la barre de force et affichez le niveau de sécurité
    var strengthRed = document.getElementById("strength-red");
    var strengthOrange = document.getElementById("strength-orange");
    var strengthGreen = document.getElementById("strength-green");
    var passwordStrength = document.getElementById("password-strength");

    strengthRed.style.width = "0%";
    strengthOrange.style.width = "0%";
    strengthGreen.style.width = "0%";

    if (strength === "red") {
        strengthRed.style.width = "100%";
        passwordStrength.textContent = "Faible";
    } else if (strength === "orange") {
        strengthOrange.style.width = "100%";
        passwordStrength.textContent = "Moyen";
    } else if (strength === "vert") {
        strengthGreen.style.width = "100%";
        passwordStrength.textContent = "Élevé";
    } else {
        passwordStrength.textContent = "Invalide";
    }
}

<?php
// Récupérez le mot de passe depuis la requête POST
$motDePasse = $_POST["motdepasse"];

// Vous devrez établir une connexion à la base de données ici
// Remplacez les valeurs de connexion par les vôtres
$serveur = "localhost";
$utilisateur = "votre_utilisateur";
$motDePasseDB = "votre_mot_de_passe";
$baseDeDonnees = "votre_base_de_donnees";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasseDB);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Effectuez la requête SQL pour vérifier la force du mot de passe
    // Remplacez cette requête par votre propre logique de vérification de mot de passe
    $requete = "SELECT couleur FROM table_password_strength WHERE motdepasse = :motdepasse";
    $stmt = $connexion->prepare($requete);
    $stmt->bindParam(":motdepasse", $motDePasse, PDO::PARAM_STR);
    $stmt->execute();
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);

    // Retournez la force du mot de passe au format JSON
    echo json_encode(["strength" => $resultat["couleur"]]);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

?>