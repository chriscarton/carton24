<section id="Contact" class="part">
	<div class="conteneur">
		<p class="message titre">Quel est votre projet ?</p>
		<form action="/actions/contact.php" method="post" data-animation="fadeInUp" data-delay="2500">
			<textarea name="projet" required placeholder="Alors voilà..."></textarea>
			<input type="email" name="email" required placeholder="adresse@email.com">
			<div class="conteneur-btn">
				<button type="submit" class="btn" data-animation="fadeIn">
					<?php require('./assets/svg/send.svg'); ?>
					Envoyer
				</button>
			</div>
		</form>
	</div>
	<?php require('./assets/svg/clavier.svg'); ?>
</section>