 <?php
 // include_once '../../views/back/index.html ';
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$Cin = $_POST['Cin'];
$motdepasse = $_POST['mot_de_passe'];






//echo "<p>CIN de l'agent : $Cin";

try {
    $pdo = new PDO("mysql:servername=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT nom, prenom,cin FROM agent WHERE Cin = :Cin AND motdepasse = :motdepasse";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":Cin", $Cin);
    $stmt->bindParam(":motdepasse", $motdepasse);
    $stmt->execute();

    $userData = $stmt->fetch(PDO::FETCH_ASSOC);




    if ($userData) {
        $firstName = $userData["nom"];
        $lastName = $userData["prenom"];
        $cin = $userData["cin"];
         // Start a PHP session
    session_start();

    // Store the data in session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['cin'] = $cin;
        echo "Bienvenue, $firstName $lastName $cin!";
    } else {
        echo "Identifiants incorrects.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}






// Échapper les données pour éviter les failles de sécurité (ex : injection SQL)
$Cin = mysqli_real_escape_string($conn, $Cin);
$motdepasse = mysqli_real_escape_string($conn, $motdepasse);

// Requête pour vérifier les coordonnées dans la base de données
$query = "SELECT role FROM agent WHERE cin = '$Cin' AND motdepasse = '$motdepasse'";
$result = $conn->query($query);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $role = $row['role'];

    // Rediriger en fonction du rôle
    if ($role === 'Admin') {
        header("Location:../../views/back/index.html ");
        exit();
    } elseif ($role === 'Agent') {
        echo "Bienvenue, $firstName $lastName $cin!";
        header("Location: page_agent.php");


       
        exit();
    }

    
} else {
    echo "Coordonnées invalides.";
}

$conn->close();
?>


















































