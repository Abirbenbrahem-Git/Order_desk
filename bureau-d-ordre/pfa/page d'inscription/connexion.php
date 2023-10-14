<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST["CIN"];
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prénom"];
    $mail = $_POST["E-mail"];
    $motdepasse = $_POST["motdepasse"];
    $role = $_POST["Role"];

    // Connexion à la base de données (utilisez vos propres informations de connexion)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medis";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO agent (cin, nom, prenom, mail, motdepasse, role) VALUES ( '$cin', '$nom', '$prenom','$mail', '$motdepasse', '$role')";

    if ($conn->query($sql) === TRUE) {
       // echo "Agent ajouté avec succès!";
        header("Location: ../page d'authentification/connexion.html");
    } else {
        echo "Erreur lors de l'ajout de l'agent: " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
