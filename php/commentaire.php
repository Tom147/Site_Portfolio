<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/commentaire.css">
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<title>Commentaire</title>
</head>
<body>
	<nav>
		<div class="logo">
			<a href="../index.php" id="left"><img src="../img/logoFinal.png" id="logo"></a>
		</div>
	</nav>

<?php
include 'credential.php';

$bdd = new PDO($db,$log,$pwd); //connexion bdd

if (isset($_GET['id']) AND !empty($_GET['id'])) {
	$getid = htmlspecialchars($_GET['id']); 

	$projet = $bdd->prepare('SELECT * FROM projets WHERE id = ?');	//prepare la requete
	$projet->execute(array($getid));								//execute
	$projet = $projet->fetch();										//vient chercher

	$avis = $bdd->prepare('SELECT * FROM avis WHERE id_projet = ?');
	$avis->execute(array($getid));

	if (isset($_POST['submit_commentaire'])) {
		if (isset($_POST['nom'],$_POST['commentaire']) AND !empty($_POST['nom']) AND !empty($_POST['commentaire'])) {
			$nom = htmlspecialchars($_POST['nom']);
			$commentaire = htmlspecialchars($_POST['commentaire']);

			if(strlen($nom) < 25) {
				$ins = $bdd->prepare('INSERT INTO avis (nom, commentaire, id_projet) VALUES (?,?,?)');
				$ins->execute(array($nom, $commentaire, $getid));
				$c_msg = "le commentaire a bien était pris en compte";

			}else {
				$c_msg = "Le nom doit faire moins de 25 caractères.";
			}
			
		}else {
			$c_msg = "Tous les champs doivent être complétés.";
		}
		
	}

	$avis = $bdd->prepare('SELECT * FROM avis WHERE id_projet = ? ORDER BY id DESC');
	$avis->execute(array($getid));

?>
<section>
	<div class="com">
	<h2>Projet: <?= $projet['contenu'] ?></h2>

	<br />

	<h2>avis :</h2>

	<form method="POST" >
		<input type="text" name="nom" placeholder="Votre nom"><br/>
		<textarea name="commentaire" placeholder="votre commentaire..."></textarea><br/>
		<input type="submit" name="submit_commentaire" value="Envoyer" id="send">
	</form>

	<?php if(isset($c_msg)) { echo $c_msg; } ?>

	<br>

	<?php while($c = $avis->fetch()) { ?>
		<b><?= $c['nom'] ?>:</b> <?= $c['commentaire'] ?><br/>
	<?php } ?>

	<?php
	}
	?>
	</div>
</section>
	
</body>
</html>


