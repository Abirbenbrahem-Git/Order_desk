<!DOCTYPE html>
<html>
<head>
    <title>Résultat de la demande</title>
    <style>
        /* Ajoutez votre CSS ici pour styliser le tableau */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Couleur de fond pour les en-têtes de colonne */
        }

        tr:nth-child(even) {
            background-color: #e0e0f0; /* Couleur de fond pour les lignes paires */
        }

        tr:nth-child(odd) {
            background-color: #ffffff; /* Couleur de fond pour les lignes impaires */
        }

        .non-traite {
            color: red;
        }

        .traite {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Résultat de la demande:</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la référence saisie par l'utilisateur
        $reference = $_POST["Réf_demande"];

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

        // Préparer la requête de sélection avec la référence spécifiée
        $sql = "SELECT * FROM demande WHERE reference = ?";
        $stmt = $conn->prepare($sql);

        // Liaison de la référence aux paramètres de la requête
        $stmt->bind_param("s", $reference);

        // Exécution de la requête préparée
        $stmt->execute();

        // Récupération des résultats
        $result = $stmt->get_result();

        // Vérification s'il y a des résultats
        if ($result->num_rows > 0) {
            // Affichage des informations de la demande dans un tableau
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>Référence: </td><td>" . $row["reference"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Objet: </td><td>" . $row["objet"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Type: </td><td>" . $row["type"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Détails: </td><td>" . $row["details"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Expéditeur: </td><td>" . $row["expediteur"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Destinateur: </td><td>" . $row["destinateur"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Document scanné: </td><td>" . $row["document"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                // Vérifiez le traitement et appliquez la classe CSS appropriée
                if ($row['traitement'] === 'non traité') {
                    echo '<td>Traitement: </td><td class="non-traite">' . $row['traitement'] . '</td>';
                } else {
                    echo '<td>Traitement: </td><td class="traite">' . $row['traitement'] . '</td>';
                }
                echo "</tr>";
            }
            echo "</table>";
            // Ajoutez ici d'autres champs que vous souhaitez afficher
        } else {
            echo "Aucune demande trouvée avec la référence '$reference'.";
        }

        // Fermeture de la connexion et du statement
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
