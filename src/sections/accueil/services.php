<?php
function generateServiceItem($service, $index) {
	?>
	<div class="item item-<?php echo $index + 1; ?>" data-animation="fadeIn" data-delay="<?= $service['delay'] ?>">
		<div class="entete">
			<?php require($service['icon']); ?>
			<h2 class="titre"><?php echo $service['title']; ?></h2>
		</div>
		<p class="texte"><?php echo $service['description']; ?></p>
	</div>
	<?php
}

$services = [
	[
			'title' => 'Design Graphique',
			'icon'=>'./assets/svg/brush.svg',
			'description' => "Je fais des propositions pour votre logo, carte de visite, flyers, affiches, site internet et autres supports de communication !",
			'delay'=>'1000'
	],
	[
			'title' => 'Développement Web',
			'icon'=>'./assets/svg/code.svg',
			'description' => 'Je développe votre site internet en respectant les bonnes pratiques et en intégrant les dernières nouveautés !',
			'delay'=>'1500'
	],
	[
		'title' => 'Dépannage et maintenance',
		'icon'=>'./assets/svg/construction.svg',
		'description' => "Je réalise la maintenance de votre site internet pour qu'il soit toujours au top ! J'inverviens avec réactivité en cas de problème !",
		'delay'=>'2000'
	],
	[
		'title' => 'Formation et suivi',
		'icon'=>'./assets/svg/school.svg',
		'description' => "Je vous forme à l'administration de votre site internet et je prends des nouvelles régulièrement !",
		'delay'=>'2500'

	]
];
?>

<section id="Services" class="part">

	<h1 class="titre" data-animation="fadeInUp">Mes services</h1>

	<p class="texte" data-animation="fadeIn" data-delay="500">
		Je conçois et réalise votre site internet de A à Z. J'assure également une continuité entre tous vos supports de communication&nbsp;!
	</p>

	<div class="grille">
		<?php
		foreach ($services as $index => $service) {
				generateServiceItem($service, $index);
		}
		?>
	</div>

</section>