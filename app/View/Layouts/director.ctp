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

		echo $this->Html->css(array('normalize','material.min','estilo','https://fonts.googleapis.com/icon?family=Material+Icons"'));
		echo $this->Html->script(array('jquery','index','material'));
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	   

<!--
<?php echo $this->Session->flash(); ?>   
-->

	
<div class="demo-layout-transparent mdl-layout mdl-js-layout indexDirector">
  <?php 

	echo $this->element('menu');
	 ?>
  <main class="mdl-layout__content">
  	<figure class=logo>
			<?php echo $this->Html->image("logoNuevo.png");?>
	</figure>

	<figure class="fotoUser">
				<?php 
		echo $this->Html->image('../files/employee_profile/foto/'.$current_user['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$current_user['EmployeeProfile']['foto']);
	 ?>
	</figure>
	<div>
				<h2>Dr. Oscar Polo Lopez</h2>
				<h2>Director Universidad</h2>
			</div>
  </main>
</div>






	<?php echo $this->Js->writeBuffer();?>
	
</body>
</html>