<?php
function generateServiceItem($service, $index) {
	?>
	<div class="item item-<?php echo $index + 1; ?>">
		<div class="entete">
			<?php require($service['icon']); ?>
			<h2 class="titre"><?php echo $service['title']; ?></h2>
		</div>
		<p><?php echo $service['description']; ?></p>
	</div>
	<?php
}

$services = [
	[
			'title' => 'Design Graphique',
			'icon'=>'./assets/svg/brush.svg',
			'description' => "Vous avez aussi besoin d'un logo, d'une carte de visite, de flyers, d'affiches."
	],
	[
			'title' => 'Développement Web',
			'icon'=>'./assets/svg/code.svg',
			'description' => 'Je code votre site avec class="" et ' . htmlentities('<style></style>')
	],
	[
		'title' => 'Dépannage et maintenance',
		'icon'=>'./assets/svg/construction.svg',
		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloribus, laborum tempore itaque accusamus eum perspiciatis quod.'
	],
	[
		'title' => 'Formation et suivi',
		'icon'=>'./assets/svg/school.svg',
		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloribus, laborum tempore itaque accusamus eum perspiciatis quod.'
	]
];
?>

<section id="Services" class="part">

	<h1 class="titre">Mes services</h1>

	<p class="texte">
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