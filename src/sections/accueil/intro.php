<section id="Intro" class="part">

	<div id="Presentation">
		<?php require('./assets/svg/fleche-1.svg'); ?>
		<p class="texte typed">
			Designer graphique et développeur web freelance, je crée des sites internet de qualité qui font le bonheur de mes clients.
		</p>
		<div class="conteneur-btn">
			<a class="btn btn-contact" href="#Contact">
				<?php require('./assets/svg/mail.svg'); ?>
				contact
			</a>
		</div>
	</div>

	<?php 
	/*
	$photo = 'IMG_E1283'; //Pas mal
	$photo = 'IMG_E1284'; //Pas mal
	$photo = 'IMG_E1285'; //Pas mal
	$photo = 'IMG_E1294'; //Pas mal moyen
	$photo = 'IMG_E1299'; //Pas mal ouais
	$photo = 'IMG_E1304'; //Pas mal ouais
	$photo = 'IMG_E1305'; //Pas mal ouais
	$photo = 'IMG_E1306'; //Pas mal ouais

	$photo = 'IMG_E1309'; //Pas mal chelou
	$photo = 'IMG_E1310'; //Pas mal chelou
	$photo = 'IMG_E1311'; //Pas mal chelou

	$photo = 'IMG_E1285-2'; //Pas mal
	$photo = 'IMG_E1288'; //Pas mal ouais
	$photo = 'IMG_E1286'; //Pas mal ouais
	$photo = 'IMG_E1290'; //Pas mal pourquoi pas
	*/
	$photo = 'IMG_E1282'; //Pas mal ouais

	
	?>
	<img src="/assets/img/photos/NB/<?= $photo ?>.jpg" class="portrait" alt="Portrait Chris Carton / Webdesigner">

	<nav id="menuPrincipal">
		<a href="#Realisations">Réalisations</a>
		<a href="#Services">Services</a>
		<a href="#Offre">Offre</a>
		<!-- <a href="#">Articles</a> -->
		<!-- <a href="#">Services</a> -->
	</nav>


	<a href="#Realisations" id="scrollDown">
		<?php require('./assets/svg/fleche-2.svg'); ?>
	</a>

</section>