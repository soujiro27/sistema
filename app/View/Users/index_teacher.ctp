<section class="maestros">
	
<nav class="maestros">
		
	<?php 

	echo $this->element('menu');
	 ?>
	</nav>

<div class="encabezadoCoordi">
<h3>Docentes</h3>
<p class="iconoMenu"></p>	
</div>

<section class="datosMaestro">
	
<?php foreach($maestros as $k =>$maestro ): ?>
<article>
<h2><?php echo $maestro ['EmployeeProfile']['lv_education']." ".$maestro ['User']['name']?></h2>
<h3><?php echo $maestro ['User']['email'] ?></h3>
<figure class="avatarMaestro">
	<?php echo $this->Html->image('../files/employee_profile/foto/'.$maestro['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$maestro['EmployeeProfile']['foto']);?>
</figure>

<?php 

		if($current_user['group_id']== 6 ){


		echo "<td>";
			 echo $this->Html->link('Editar', array('action'=>'editTeacher',$maestro['User']['id'])); 
			
			echo $this->Form->postlink('Eliminar',array('action'=>'deleteTeacher',$maestro['User']['id']),array('confirm'=>'deceas Eliminar al maestro')); 
		echo "</td>";
		}else {

		}

	

	?>


	<?php 

				foreach ($materiasImparte as $key => $impartiendo) {
					if($impartiendo['teacher_id'] == $maestro['User']['id']){
						echo '<p>'.$impartiendo['course_name'].'</p>';

					
					}

				}

			?>
<?php endforeach;?>
</article>

</section>


		
		


	
	
		
		<?php 

		if($current_user['group_id']== 6 ){
		echo $this->Html->link('agregar maestro', array('controller'=>'users','action'=>'addTeacher'));

		echo "<td>";
			 echo $this->Html->link('Editar', array('action'=>'editTeacher',$maestro['User']['id'])); 
			
			echo $this->Form->postlink('Eliminar',array('action'=>'deleteTeacher',$maestro['User']['id']),array('confirm'=>'deceas Eliminar al maestro')); 
		echo "</td>";
		}else {

		}

	

	?>




</section>