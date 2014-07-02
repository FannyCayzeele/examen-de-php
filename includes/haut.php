<?php
/*
Neoterranos & LkY
Page haut.php

Page incluse créant le doctype etc etc.

Quelques indications : (utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations/erreurs :
--------------------------
Aucune information/erreur
--------------------------
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
	<?php
	/**********Vérification du titre...*************/
	
	if(isset($titre) && trim($titre) != '')
	$titre = $titre.' : '.TITRESITE;
	
	else
	$titre = TITRESITE;
	
	/***********Fin vérification titre...************/
	?>
		<title><?php echo $titre; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="language" content="fr" />
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/design.css" type="text/css" media="screen" />
	</head>


	<body>
		<div id="banniere">
			<a href="<?php echo ROOTPATH;?>/index.php"><img src="<?php echo ROOTPATH; ?>/images/banniere.png"/></a>
		</div>
		
		<div id="menu">
			<div id="menu_gauche">
			<!-- Vide, mettez-y les liens qui ne dépendent pas du statut
			du membre (connecté ou non) -->
			</div>
			
			<div id="menu_droite">
			<?php
			if(isset($_SESSION['membre_id']))
			{
			?>
				<a href="<?php echo ROOTPATH; ?>/membres/moncompte.php">Gérer mon compte</a>   <a href="<?php echo ROOTPATH; ?>/membres/deconnexion.php">Se déconnecter</a>
			<?php
			}
			
			else
			{
			?>
				<a href="<?php echo ROOTPATH; ?>/membres/inscription.php">Inscription</a>   <a href="<?php echo ROOTPATH; ?>/membres/connexion.php">Connexion</a>
			<?php
			}
			?>
			</div>
		</div>