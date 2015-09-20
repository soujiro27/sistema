

	
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
   <?php 

  echo $this->element('menu');
   ?>
  <main class="mdl-layout__content coordinadores">
  	
	
<?php foreach($coordinators as $k => $coordi):?>

	<article>


<!-- Left aligned menu below button -->
<button class="mdl-button mdl-js-button mdl-button--icon" id="botonOpcionCoordi">
  <i class="material-icons">more_vert</i>
</button>

<ul class="menuOpcionesCoordi">
  <li>
  	<?php echo $this->Html->link('Ver Carreras',array('action'=>'vercarreras',$coordi['User']['id']))?>
  	</li>
  <li><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminarcoordi',$coordi['User']['id']),array('confirm'=>'Deceas eliminar a este coordinador ?')); ?></li>
  
</ul>

	<h2>
			<?php echo $coordi['EmployeeProfile']['lv_education'].' '.$coordi['User']['name']?>
		</h2>
		<figure>
		<?php echo $this->Html->image('../files/employee_profile/foto/'.$coordi['EmployeeProfile']['foto_dir'].'/'.'thumb_'.$coordi['EmployeeProfile']['foto']) ?>
			
		</figure>
		<div class="textoCoordi">
			
	<!--
		
			<?php echo $this->Html->link('asignar',array('action'=>'assigncareers',$coordi['User']['id'])); ?> 
			
	<?php echo $this->Html->link('edit', array('action'=>'editacoordinador',$coordi['User']['id'])); ?>
	-->
				
				

</div>

	



	</article>

<?php endforeach;?>
	


  </main>
</div>
