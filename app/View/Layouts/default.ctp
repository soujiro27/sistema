<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>
		
		Plataforma Dorados
	</title>
	<?php
		// echo $this->Html->meta('icon');

		echo $this->Html->css(array('jquery-ui.min','https://fonts.googleapis.com/icon?family=Material+Icons"','material.min','login','estilo'));
		echo $this->Html->script(array('jquery','jquery-ui.min','material','index'));
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="mdl-grid">
	<div id="content">

			<?php echo $this->fetch('content'); 
			$tipo= $current_user['group_id'];
			?>
		</div>
	</div>

	<?php echo $this->Js->writeBuffer();?>
	
</body>
</html>
