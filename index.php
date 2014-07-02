<?php
/*
Neoterranos & LkY
Page index.php

Index du site.

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

session_start();
header('Content-type: text/html; charset=utf-8');
include('includes/config.php');

/********Actualisation de la session...**********/

include('includes/fonctions.php');
connexionbdd();
actualiser_session();

/********Fin actualisation de session...**********/

/********Entête et titre de page*********/

$titre = 'Inscription';

include('includes/haut.php'); //contient le doctype, et head.

/**********Fin entête et titre***********/
?>

		<div id="colonne_gauche">
		<?php
		include('includes/colg.php');
		?>
		</div>
		
		<div id="contenu">
			<div id="map">
				<a href="index.php">Accueil</a>
			</div>
			
			<h1>Bienvenue sur mon super site !</h1>
			<p>Ce site parlera de ... et est ouvert à tous.
			Cependant, faut payer pour <a href="membres/inscription.php">s'inscrire</a> mouhahaha !
			
			Le Webmaster
			</p>
		</div>
		
		<?php
		include('includes/bas.php');
		mysql_close();
		?>