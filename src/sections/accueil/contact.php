<section id="Contact">
	<div class="conteneur">
		<p class="message titre">Quel est votre projet ?</p>
		<form action="/actions/contact.php">
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