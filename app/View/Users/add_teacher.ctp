<div class="demo-layout-transparent mdl-layout mdl-js-layout">
   <?php 

  echo $this->element('menuCoordinador');
   ?>
  <main class="mdl-layout__content addTeacher">
  	
<h3>Agregar Profesor</h3>


	<?php 
		echo $this->Form->create('User',array('class'=>'addForm','type'=>'file','novalidate'=>'novalidate'));
		echo $this->Form->hidden('id');
		echo $this->Form->input ('name',array('label'=>'Nombre'));
		echo $this->Form->input ('apat',array('label'=>'Apellido Paterno'));
		echo $this->Form->input ('amat',array('label'=>'Apellido Materno'));
		echo $this->Form->input ('email',array('label'=>'Correo Electronico'));
		echo $this->Form->hidden('password',array('label'=>'Contraseña'));
		echo $this->Form->hidden ('group_id',array('value'=> '7'));
		echo $this->Form->input('EmployeeProfile.lv_education',array('label'=>'Nivel de estudios',
		'options'=> array('LIC'=>'LIC','ING'=>'ING','MTRO'=>'MTRO','DR'=>'DR'),
		'empty'=>'Seleccione el nivel'));
		echo $this->Form->input('EmployeeProfile.foto',array('type'=>'file','label'=>'Foto de perfil'));
		echo $this->Form->input('EmployeeProfile.foto_dir',array('type'=>'hidden'));
	

		echo $this->Form->end('Registrar Profesor');

?>



<?php echo  $this->Html->script('scripts');?>

  </main>
</div>


































