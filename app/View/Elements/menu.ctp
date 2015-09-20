

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
    <span class="mdl-layout-title">Plataforma</span>
    <div class="datos">
    	<figure class="fotoUser">
				<?php 
		echo $this->Html->image('../files/employee_profile/foto/'.$current_user['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$current_user['EmployeeProfile']['foto']);
	 ?>
	</figure>
    </div>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/sistema/users/">Inicio</a>
      <a class="mdl-navigation__link" href="/sistema/users/indexcoordinator">Coordinadores</a>
      <a class="mdl-navigation__link" href="/sistema/users/indexTeacher">Maestros</a>
      <a class="mdl-navigation__link" href="">Asistencias</a>
       <a class="mdl-navigation__link" href="">Calificaciones</a>
      <a class="mdl-navigation__link" href="">Salir</a>

    </nav>
  </div>





