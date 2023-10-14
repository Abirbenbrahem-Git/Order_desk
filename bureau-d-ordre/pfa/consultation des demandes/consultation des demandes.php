<!DOCTYPE html>
<html>
<head>
    <title>Liste des demandes</title>
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

        .non_traité {
            color: red;
        }

        .traite {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Liste des demandes:</h1>
    <table>
        <tr>
            <th>Référence</th>
            <th>Objet</th>
            <th>Détails</th>
            <th>Type</th>
            <th>Expéditeur</th>
            <th>destinateur</th>
            <th>Document scanné</th>
            <th>Traitement</th>
        </tr>
        <?php
        session_start();
        // Supposez que vous ayez déjà récupéré l'ID de l'agent connecté
        $cin_agent = $_SESSION['cin']; // Assurez-vous que l'agent est connecté et que son ID est stocké dans la session.

        // Connexion à la base de données (à adapter selon votre configuration)
        $mysqli = new mysqli("localhost", "root", "", "medis");

        // Vérifiez la connexion à la base de données
        if ($mysqli->connect_error) {
            die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
        }

        // Requête SQL pour récupérer les demandes de l'agent connecté
        $query = "SELECT * FROM demande WHERE cin_agent = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $cin_agent);
        $stmt->execute();

        $result = $stmt->get_result();

        // Affichez les demandes
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['reference'] . "</td>";
            echo "<td>" . $row['objet'] . "</td>";
            echo "<td>" . $row['details'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['expediteur'] . "</td>";
            echo "<td>" . $row['destinateur'] . "</td>";
            echo "<td>" . $row['document'] . "</td>";

            // Vérifiez le traitement et appliquez la classe CSS appropriée
            if ($row['traitement'] === 'non traité') {
                echo '<td class="non_traité">' . $row['traitement'] . '</td>';
            } else {
                echo '<td class="traite">' . $row['traitement'] . '</td>';
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Fermez la connexion à la base de données
$stmt->close();
$mysqli->close();
?>
