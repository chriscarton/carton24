<?php 

$realisations1 = [
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


$realisations2 = [
	/*
	'leselectrosdequiberon.com'=>[
		'title'=>"Les Électros de Quiberon",
		'url'=>"https://leselectrosdequiberon.com"
	],
	*/	
	'pssff.fr'=>[
		'title'=>"Paris Surf and Skateboard Film Festival",
		'url'=>"https://pssff.fr"
	],
	'innovation-eco.com'=>[
		'title'=>"Innovation Éco",
		'url'=>"https://innovation-eco.com"
	],
	'lcmb.fr'=>[
		'title'=>"La Compagnie du mieux boire",
		'url'=>"https://lcmb.fr"
	],
	'whiskybox.fr'=>[
		'title'=>"Whisky Box",
		'url'=>"https://whiskybox.fr"
	],
	'masastudio.fr'=>[
		'title'=>"Masa Studio",
		'url'=>"https://masastudio.fr"
	],
	'paimpol-festival.bzh'=>[
		'title'=>"Paimpol Festival",
		'url'=>"https://paimpol-festival.bzh"
	],
	'infobasque.com'=>[
		'title'=>"Info Basque",
		'url'=>"https://infobasque.com"
	],
	'clavierlibre.fr'=>[
		'title'=>"Clavier Libre",
		'url'=>"https://clavierlibre.fr"
	],
	'margot-1'=>[
		'title'=>"Margot",
		'url'=>"https://margot.fr"
	],
	'melanie-duez'=>[
		'title'=>"Mélanie Duez",
		'url'=>"https://duez-melanie-avocat.fr/"
	],
	'esad-valenciennes'=>[
		'title'=>"Esad Valenciennes",
		'url'=>"https://esad-valenciennes.fr/"
	],
	'petr-opelik'=>[
		'title'=>"Petr Opelik",
		'url'=>"https://petr-opelik.com/"
	],
	'popeo'=>[
		'title'=>"Popeo",
		'url'=>"https://popeo.fr/"
	],
	'gtliens'=>[
		'title'=>"GTLiens",
		'url'=>"https://gtliens.com/"
	],
];

$realisations = array_merge($realisations1, $realisations2);


?>
<section id="Realisations" class="part">

	<p class="titre" data-animation="fadeIn">Dernières réalisations</p>

	<div class="galerie">
	<?php 
	$data_delay = 0000;
	foreach($realisations as $key => $realisation): 
		
		?>
		<a rel="nofollow" data-animation="fadeInDown" data-delay="<?= $data_delay ?>" href="<?= htmlspecialchars($realisation['url']) ?>" class="item" target="_blank">
			<img src="/assets/img/realisations/<?= htmlspecialchars($key) ?>.jpg" alt="">
			<span class="item-titre"><?= htmlspecialchars($realisation['title']) ?></span>
		</a>
	<?php 
	$data_delay = $data_delay+500;
	endforeach; ?>

	</div>

</section>