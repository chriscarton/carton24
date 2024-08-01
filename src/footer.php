<?php
	/*
		Comme je fais beaucoup de tests, 
		je veux inclure des scripts spécifiques à chaque page
	*/
	if(!empty($requested_page)){
		if(file_exists("./assets/js/page/{$requested_page}.js")):
		?>
			<script src="/assets/js/page/<?= $requested_page ?>.js"></script>
		<?php
		endif;
	}
?>
</body>
</html>