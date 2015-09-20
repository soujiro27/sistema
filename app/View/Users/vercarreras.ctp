
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <?php 

	echo $this->element('menu');
	 ?>
  <main class="mdl-layout__content verCarreras">
  	
		
	<div class="administradas">
		<h2>Carreras de:</h2>
		<h3><?php echo implode($nombre);?></h3>
	</div>

	<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
	


	<?php foreach($todo as $k => $administra): ?>
		
		<tr>
		
		
		<td class="nombre"> <?php echo $career[$administra['Usrcareer']['career_id']];?> </td>
		<td class="accion"> 
			
	<?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminacc',$administra['Usrcareer']['id'],$administra['Usrcareer']['user_id']),array('confirm'=>'Deceas dar de baja el control de la carrera: '.$career[$administra['Usrcareer']['career_id']].' para este usuario'));?>



		</td>
		</tr>

<?php endforeach;?>

</table>

  </main>
</div>
