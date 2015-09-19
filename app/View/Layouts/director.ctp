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
		echo $this->Html->script(array('jquery','index','material.min'));
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	   

<!--
<?php echo $this->Session->flash(); ?>   
	
	<nav class="indexDirector">
		
	<?php 

	echo $this->element('menu');
	 ?>
	</nav>

	<section class="contenido">
		<header>

		<figure class=logo>
			<?php echo $this->Html->image("logoNuevo.png");?>
		</figure>
		<p class="iconoMenu"></p>
		<div class="datos">
			<figure class="fotoUser">
				<?php 
		echo $this->Html->image('../files/employee_profile/foto/'.$current_user['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$current_user['EmployeeProfile']['foto']);
	 ?>
			</figure>
			<div>
				<h2>Dr. Oscar Polo Lopez</h2>
				<h2>Director Universidad</h2>
			</div>
		</div>
			
		</header>

		<section class="bienvenida">
			<h2>Plataforma Dorados</h2>
			<article>
				<div class="bolita uno">
					
				<h3 class="coordinador"></h3>
				</div>
				<div class="texto">
					<h2>Coordinadores</h2>
					<p>Podra consultar, dar de alta y eliminar coordinadores, asi como asignarles las materias que coordina cada uno.</p>
				</div>
			</article>
			<article>
			<div class="bolita dos">
				
				<h3 class="maestro"></h3>
			</div>
				<div class="texto">
					<h2>Maestros</h2>
					<p>Podra consultar los diferentes perfiles de cada docente, asi como las materias que imparte cada uno.</p>
				</div>
			</article>
			<article>
			<div class="bolita tres">
				
				<h3 class="alumno"></h3>
			</div>	
				<div class="texto">
					<h2>Alumnos</h2>
					<p>Podra consultar las calificaciones y asistencias de los alumnos por grupo y generar reportes</p>
				</div>
			</article>
		</section>
	</section>

	
	-->


<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Plataforma Dorados</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Plataforma Dorados</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
  	<figure class=logo>
			<?php echo $this->Html->image("logoNuevo.png");?>
	</figure>

	<figure class="fotoUser">
				<?php 
		echo $this->Html->image('../files/employee_profile/foto/'.$current_user['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$current_user['EmployeeProfile']['foto']);
	 ?>
	</figure>
  </main>
</div>






	<?php echo $this->Js->writeBuffer();?>
	
</body>
</html>