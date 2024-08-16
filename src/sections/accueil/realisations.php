<?php 

$realisations = [
	'handitravelworld' => [
			'title' => 'Handi Travel World',
			'url' => 'https://handitravelworld.com'
	],
	'capblancpelagique' => [
			'title' => 'Cap Blanc Pélagique',
			'url' => 'https://capblancpelagique.com/'
	],
	'enfeu' => [
			'title' => 'Enfeu Studio',
			'url' => 'https://enfeu.studio'
	],
	'particip-action' => [
			'title' => 'Particip Action',
			'url' => 'https://particip-action'
	],
	'karakter-events' => [
			'title' => 'Karakter Events',
			'url' => 'https://karakter-events.com/'
	],
	'clefsdedos' => [
			'title' => 'Clefs de Dos',
			'url' => 'https://clesdedos.com'
	]
];
?>
<section id="Realisations" class="part">

	<p class="titre" data-animation="fadeIn">Dernières réalisations</p>

	<div class="galerie">
	<?php 
	$data_delay = 0000;
	foreach($realisations as $key => $realisation): 
		
		?>
		<a data-animation="fadeInDown" data-delay="<?= $data_delay ?>" href="<?= htmlspecialchars($realisation['url']) ?>" class="item" target="_blank">
			<img src="/assets/img/realisations/<?= htmlspecialchars($key) ?>.jpg" alt="">
			<span class="item-titre"><?= htmlspecialchars($realisation['title']) ?></span>
		</a>
	<?php 
	$data_delay = $data_delay+500;
	endforeach; ?>

	</div>

</section>