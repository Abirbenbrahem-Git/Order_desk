

<?php
// Votre code de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medis";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer la référence depuis l'URL
if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    // Mettre à jour le champ "traitement" en fonction de la référence
    $sql = "UPDATE demande SET traitement = 'traité' WHERE reference = '$reference'"; 

    if ($conn->query($sql) === TRUE) {
       // echo "Champ 'traitement' mis à jour avec succès pour la référence '$reference'.";
       header("Location:showdemande.php ");
    } else {
        echo "Erreur lors de la mise à jour du champ 'traitement': " . $conn->error;
    }
} else {
    echo "Aucune référence spécifiée.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
