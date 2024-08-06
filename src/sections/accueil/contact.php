<section id="Contact" class="part">
	<div class="conteneur">
		<p class="message titre">Quel est votre projet ?</p>
		<form action="/actions/contact.php" data-animation="fadeInUp" data-delay="2500">
			<textarea name="projet" placeholder="Alors voilà..."></textarea>
			<input type="email" placeholder="adresse@email.com">
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