<div id="Accueil">
	<section id="zoneTitrePrincipal">
		<h1 id="titrePrincipal">CHRIS CARTON</h1>
	</section>
	<?php 
	require('./elements/decoupe.php'); 
	require('./sections/accueil/intro.php'); 
	?>
</div>

<?php
require('./sections/accueil/realisations.php'); 
require('./sections/accueil/pub.php'); 

$texte_banniere = 'NE BOUGEZ PAS';
require('./elements/banniere.php'); 

require('./sections/accueil/cafe.php'); 
require('./sections/accueil/offre.php'); 


$texte_banniere = 'installez-vous confortablement';
require('./elements/banniere.php'); 

require('./sections/accueil/contact.php');
?>

<div id="footerZone">
<?php
require('./sections/accueil/carte.php'); 
require('./elements/footer.php'); 
?>
</div>