
<fieldset>
	<legent>agregar Grupo</legent>

	<?php 
		echo $this->Form->create('Grupo');
		echo $this->Form->input('period',array('label'=>'Cuatrimestre','type'=>'select','options'=>array(
			'1'=>'1',
			'2'=>'2',
			'3'=>'3',
			'4'=>'4',
			'5'=>'5',
			'6'=>'6',
			'7'=>'7',
			'8'=>'8',
			'9'=>'9',
			'10'=>'10')));
		echo $this->Form->input('name',array('label'=>'Grupo'));
		echo $this->Form->input('career_id',array('label'=>'Carrera'));
		echo $this->Form->end('Gruardar grupo')
	?>
</fieldset>