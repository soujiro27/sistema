<h3>Agregar Criterios de evaluación para la materia: <?php echo implode($materia) ?></h3>

<!-- meter en una tabla  -->
<!-- Cuando se agregue el login se remueve la columna usuario y se deja como variable default -->
<?php 
	echo $this->Form->create('Goal',array('id'=>"GoalForm"));
?>
<div class='inputsEscondidos'>
		<?php echo $this->Form->hidden('Goal.0.user_id',array('label'=>false,'value'=>$user_id,'class'=>'escondido1')); ?>
		<?php 	echo $this->Form->hidden('Goal.0.course_id',
		array('value'=>$course_id,
			'class'=>'escondido2',
			'label'=>false,
			'type'=>'text')); ?>
			<?php echo $this->Form->hidden('Goal.0.parcial',array('label'=>false,'value'=>$partial,'class'=>'escondido3'));?>
			<?php echo $this->Form->hidden('Goal.0.grupo_id',array('label'=>false,'value'=>$grupo,'class'=>'escondido4'));?>


		</div>


<table id="criterios">
	<tbody id="tb">

<tr>

	<th>Descripcion</th>
	<th>Parcial</th>
	<th>Porcentaje</th>
	<th>Eliminar</th>
</tr>



		<tr class="contenido">

		<td><?php echo $this->Form->input('Goal.0.description',array('label'=>false,'class'=>'required capitalGoal')); ?></td>
		

		<td> <?php echo $partial; ?></td>
		<td><?php echo $this->Form->input('Goal.0.percentage',array('label'=>false,'id'=>'por','class'=>'required number')); ?></td>
		<td> <input type="button" class="elimina" value="Eliminar"> </td>
	</tr>

	</tbody>
</table>



<?php echo $this->Form->end('Guardar');?>


<?php  echo $this->Html->script(array('scripts','jquery.validate.min','additional-methods.min','messages_es.min')); ?>

<?php echo $this->Html->scriptBlock('$("#GoalForm").validate({focusInvalid: false });', array('inline'=>true));?>



<button id="aumenta">Agregar criterio </button>



