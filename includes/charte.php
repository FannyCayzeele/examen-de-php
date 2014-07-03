<?php
/*
Neoterranos & LkY
Page charte.php

Contient la charte et génère le QCM qui va avec.

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
					<div id="charte">
						<h1>La charte de mon site :</h1>
						<p>Ce site contient un espace membres, un forum, un système de news ainsi que d'autres modules.<br/>
						En vous inscrivant, vous reconnaissez avoir pris connaissance de cette charte et l'avoir acceptée.
						Si tel n'est pas le cas, vous ne pouvez vous inscrire.</p><br/>
						
						<div class="chartecat">Règlement Général du site</div><br/>
						<p>Ce site et toutes ses pages sont soummis à la loi française, par conséquent, il est interdit
						d'y tenir des propos ou d'y publier du contenu illégal aux yeux de la loi, sont considérés illégaux entres
						autres les contenus suivants : contenu à caractère raciste, contenu diffamatoire, contenu incitant à la haine,
						à la violence, contenu expliquant comment pirater (i.e. : à des fins néfastes ou non), contenu violant les droits
						d'auteur.<br/>
						À cette liste non exhaustive vient s'ajouter l'interdiction de publier du contenu à caractère sexuel.<br/>
						Cette liste étant non exhaustive, nous faisons appel à votre bon sens pour discerner ce que vous pouvez publier
						et / ou dire de ce que vous ne pouvez publier / dire.<br/>
						Les propos insultants, dégradants, agressifs ou tout comportement néfaste à une ambiance correcte sur l'ensemble
						du site sont interdits.<br/>
						Le thème de ce site n'est pas restreint, bien que les technologies de l'information soient le thème principal, libre
						à vous de parler de couture si ça vous chante, mais n'espérez pas trouver autant d'adeptes de la couture que de la
						programmation ici.<br/>
						Les forums sont un espace de discussion important pour un site à caractère communautaire, surtout s'il est centré
						sur l'informatique, mais c'est aussi un espace d'entraide, par conséquent, n'hésitez pas à y poser vos questions si
						vous en avez, cependant, pensez à faire une recherche avant de poster une question, peut-être que la question a déjà été posée par
						un autre membre, et de plus, votre sujet devra avoir un titre clair et concis.<br/>
						Partout sur le site, vous devrez écrire dans un français correct, toute forme de langage SMS (abrégé) est interdite.<br/>
						Il est important de noter que pour votre confort, et le nôtre, le forum est surveillé par une équipe de modération
						bénévole, qui peut être ammenée à sanctionner tout membre enfreignant le règlement, ceci allant de l'avertissement
						à l'interdiction d'accéder au site.<br/>
						La messagerie privée est, comme son nom l'indique, privée. Cependant, vous acceptez l'idée que vous, ou votre / vos
						interlocuteur(s) puisse(nt), à tout moment, demander à l'équipe de modération du site de lire votre échange avec
						lui / eux en cas de problème.<br/>
						Vous reconnaissez que ce site est la propriété de son créateur, qui est, par conséquent libre de faire ce
						qu'il veut de celui-ci, tout en respectant le caractère privé des informations que vous, ou tout autre membre, lui donnez en vous
						inscrivant et en utilisant le site.<br/>
						Vous êtes donc propriétaire de votre compte et responsable de celui-ci (ainsi que des propos tenus avec), vous pouvez
						à tout moment demander sa suppression. Veuillez noter qu'à aucun moment, l'équipe du site ne vous demandera votre mot
						de passe.<br/>
						
						Fin (ben ouais, vous y mettez ce que vous voulez dans votre charte, mais à 2h du mat, moi ça me barbe de continuer ;
						en plus, c'est pas terrible. ^^ )
						</p>
					</div>

<div id="qcm">
	<h1>Questionnaire sur la charte :</h1>
	<p>Pous nous assurer que vous avez lu le règlement, ou du moins que vous avez du bon sens,
	voici un questionnaire à remplir. (Le remplir signifie accepter la charte.)
	</p>
		<?php
		/*QCM CHARTE*/
		$questions = Array();
		$questions[] = Array('A qui appartient ce site ?', 'Son créateur', 'Vous', 'L\'hébergeur web du site', 'À personne', 'Je ne sais pas', 1);
		$questions[] = Array('Que faut-il faire avant de poser une question sur les forums ?', 'Rien', 'Demander à son voisin s\'il a la réponse', 'Une recherche sur le site', 'Consulter Google', 'Je ne sais pas', 3);
		$questions[] = Array('Vous pouvez supprimer votre compte...', 'quand vous voulez', 'quand vous voulez en le demandant à un administrateur', 'seulement le mardi', 'seulement si vous ne respectez pas le règlement', 'Je ne sais pas', 2);
		$questions[] = Array('Quel titre de sujet convient ?', 'PC en carton plante tout le temps', 'Grrrrrrrrr!!!! Quelqu\'un a un marteau ?', 'A l\'aiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiide !!', '[Windows] Plantage système au démarrage', 'Je ne sais pas', 4);
		$questions[] = Array('Qui surveille les forums ?', 'L\'équipe de modération', 'Les administrateurs', 'L\'hébergeur web du site', 'Il se surveille tout seul', 'Je ne sais pas', 1);
		$questions[] = Array('Quel sujet n\'est pas légal ?', '[SONDAGE] Vous lavez-vous souvent les cheveux ?', '[HOTMAIL] Contourner le filtre anti-spam', 'La nouvelle loi Hadopi, la fin du P2P en France ?', 'Topic flood !', 'Je ne sais pas', 2);
		$questions[] = Array('Si quelqu\'un vous demande votre mot de passe...', 'il n\'est pas membre de l\'équipe du site', 'c\'est qu\'il est curieux', 'vous lui donnez', 'vous lui demandez le sien en échange', 'Je ne sais pas', 1);
		$questions[] = Array('Quel langage est interdit sur ce site ?', 'L\'anglais', 'L\'allemand', 'Le braille', 'Le SMS', 'Je ne sais pas', 4);
		$questions[] = Array('En vous inscrivant vous reconnaissez', 'être fan du site', 'aimer le chocolat', 'avoir accepté la charte', 'être bête', 'Je ne sais pas', 3);
		$Tquestions = count($questions);
		?>

		<?php
		$locate = Array();
		$i=1;

		while($i<=3)
		{
			$k = $questions[mt_rand(0,$Tquestions-1)];
			while(in_array($k, $locate))
			{
				$k = $questions[mt_rand(0,$Tquestions-1)];
			}
			$locate[] = $k;
			$i++;
		}
		?>

		<!--Affichage-->
		<?php
		$i=1;
		while($i<=3)
		{
			$_SESSION['reponse'.$i] = $locate[$i-1][6];
		?>
								<span class="question"><?php echo $locate[$i-1][0]; ?></span><br/>
								<input type="radio" name="reponse<?php echo $i; ?>" value="1" id="<?php echo $i; ?>1" /> <label for="<?php echo $i; ?>1"><?php echo $locate[$i-1][1]; ?></label><br />
								<input type="radio" name="reponse<?php echo $i; ?>" value="2" id="<?php echo $i; ?>2" /> <label for="<?php echo $i; ?>2"><?php echo $locate[$i-1][2]; ?></label><br />
								<input type="radio" name="reponse<?php echo $i; ?>" value="3" id="<?php echo $i; ?>3" /> <label for="<?php echo $i; ?>3"><?php echo $locate[$i-1][3]; ?></label><br />
								<input type="radio" name="reponse<?php echo $i; ?>" value="4" id="<?php echo $i; ?>4" /> <label for="<?php echo $i; ?>4"><?php echo $locate[$i-1][4]; ?></label><br />
								<input type="radio" name="reponse<?php echo $i; ?>" value="5" id="<?php echo $i; ?>5" /> <label for="<?php echo $i; ?>5"><?php echo $locate[$i-1][5]; ?></label><br />
		<?php
			$i++;
		}
		?>
</div>
