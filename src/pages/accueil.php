<?php require('./sections/accueil/tarifs.php'); ?>
<div id="Accueil">
	<section id="zoneTitrePrincipal">
		<h1 id="titrePrincipal">CHRIS CARTON</h1>
	</section>
	<?php 
	require('./sections/accueil/intro.php'); 
	?>
</div>
<?php
require('./sections/accueil/realisations.php'); 
require('./sections/accueil/pub.php'); 
require('./elements/decoupe.php'); 
require('./sections/accueil/services.php'); 
require('./sections/accueil/offre.php'); 
require('./sections/accueil/cafe.php'); 
require('./sections/accueil/contact.php');
?>
<div id="footerZone">
	<?php
	require('./sections/accueil/carte.php'); 
	require('./elements/footer.php'); 
	?>
</div>