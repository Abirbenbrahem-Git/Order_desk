<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reference = $_POST["Réf_demande"];
    $objet = $_POST["Objet"];
    $type = $_POST["type"];
    $details = $_POST["Détails"];
    $expediteur = $_POST["Expéditeur"];
    $destinateur = $_POST["Destinataire"];
    $document = $_POST["Document_scanné"];
    $cin = $_POST['cin'];

    //$traitement = $_POST["traitement"];
    //$traitement = $_POST["traitement"];

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
    $sql = "INSERT INTO demande (reference, objet, type, details, expediteur, destinateur, document, cin_agent) VALUES ( '$reference', '$objet', '$type','$details', '$expediteur', '$destinateur', '$document', '$cin')";

    //$sql = "INSERT INTO demande (reference, objet, type, details, expediteur, destinateur, document) VALUES ( '$reference', '$objet', '$type','$details', '$expediteur', '$destinateur', '$document')";
    if ($conn->query($sql) === TRUE) {
        //echo "Demande ajouté avec succès!";
        header("Location: ../page d'authentification/page_agent.php"); 
    } else {
        echo "Erreur lors de l'ajout de la demande: " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
