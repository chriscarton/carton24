<section id="Contact" class="part">
	<div class="conteneur">
		<p class="titre" id="titreContact" data-animation="fadeInDown">Quel est votre projet ?</p>
		<form id="formContact" action="/actions/contact.php" method="post" data-animation="fadeInUp" data-delay="1000">
			<textarea name="projet" required placeholder="Alors voilà..."></textarea>
			<input type="email" name="email" required placeholder="adresse@email.com">
			<div class="conteneur-btn">
				<button type="submit" class="btn">
					<?php require('./assets/svg/send.svg'); ?>
					Envoyer
				</button>
			</div>
		</form>
	</div>
	<?php require('./assets/svg/clavier.svg'); ?>
</section>