<h2>Listado de maestros</h2>

<table>
	
	<tr>
		<th>id</th>
		<th>Nombre </th>
		


		<th>Email</th>
		<th>Password</th>
	<th>Nivel de educacion</th>
	<th>Foto</th>
		<th>Status</th>
		<th>Acciones</th>
	</tr>

<?php foreach($maestros as $k =>$maestro ): ?>
	<tr>
		<td><?php echo $maestro ['User']['id'] ?></td>
		<td><?php echo $maestro ['User']['name'] ?></td>
	

		<td><?php echo $maestro ['User']['email'] ?></td>
		<td><?php echo $maestro ['User']['password'] ?></td>
		<td><?php echo $maestro ['EmployeeProfile']['lv_education'] ?></td>

		<td><?php echo $maestro ['EmployeeProfile']['picture'] ?></td>
		<td><?php echo $maestro ['User']['group_id'] ?></td>

		<td>
			<?php echo $this->Html->link('Editar', array('action'=>'editTeacher',$maestro['User']['id'])); ?>
			&nbsp
			<?php echo $this->Form->postlink('Eliminar',array('action'=>'deleteTeacher',$maestro['User']['id']),array('confirm'=>'deceas Eliminar al maestro')); ?>
		</td>



	</tr>

<?php endforeach;?>


</table>

<?php echo $this->Html->link('agregar maestro', array('controller'=>'users','action'=>'addTeacher')); ?>