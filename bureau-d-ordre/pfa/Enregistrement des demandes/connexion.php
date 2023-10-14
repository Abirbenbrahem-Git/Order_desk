<?php
// Démarrez la session si ce n'est pas déjà fait
session_start();

// Récupérez l'ID de l'agent depuis la session
$cin = $_SESSION['cin'];
//echo "Bienvenue,cin:$cin!";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enregistrement des demandes
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--<link rel="stylesheet" type="text/css" href="stylepage.css">-->
	<link rel="stylesheet" type="text/css" href="cssFormulaire.css">

</head>
<body>
		<div class="container">

    	<div class="right_Side">
        <div class="about">
			<div class="contact-box">
				<div class="left"></div>
				<div class="right">
					<h2>Enregistrement des demandes</h2>
					<form action="demande.php" method="post">
					<input type="text" class="field" placeholder="Réf demande" name="Réf_demande">
					<input type="text" class="field" placeholder="Objet" name="Objet">
					<select class="field" placeholder="type" name="type">
						<option> Courrier entrant</option>
						<option> Courrier sortant</option>
					</select>
					<input type="text" class="field" placeholder="Expéditeur" name="Expéditeur">
					<input type="text" class="field" placeholder="Destinataire" name="Destinataire">
					<textarea type="text" class="field" placeholder="Détails" name="Détails"></textarea>
					<p > Document scanné</p>
					<input type="file" class="field" placeholder="Document scanné" name="Document_scanné">
                 
					<!-- Ajoutez le champ caché pour l'ID de l'agent -->
    <input type="hidden" name="cin" value="<?php echo $cin; ?>">

					<button class="btn" name="register"> Enregistrer </button>
				</div>
			</div>
		</div>
		</div>





</div>

</form>

</div>
</div>

<br><br>


</body>
</html>

