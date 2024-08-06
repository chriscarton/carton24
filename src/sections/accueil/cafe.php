<section id="Cafe" class="part">
	<div>
		<img src="/assets/img/cafetiere.png" alt="cafetiere" data-animation="fadeInRight">
	</div>
	<p class="message">Voulez-vous un café ?</p>
	<div class="reponses">
		<button class="reponse" data-reponse="oui-a-un-cafe">oui</button>
		<button class="reponse">non</button>
	</div>
	<div class="reaction" data-reaction="oui-a-un-cafe">
		<?php require('./assets/svg/separateur.svg'); ?>
		<p class="message">Et voilà !</p>
		<img src="/assets/img/tasse-de-cafe.png" alt="Une tasse de café" data-animation="fadeInLeft">
	</div>
</section>