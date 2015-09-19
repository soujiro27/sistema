<div class="mdl-cell mdl-cell--12-col login">
<figure>
	<?php echo $this->Html->image("logoNuevo.png");?>
</figure>
<div id="loginForm">
    
<?php 
 
	
	echo $this->Form->create('User',array('action' => 'login'));
	
	


	echo $this->Form->input('email',array('label'=>false,'id'=>'userLogin','class'=>'usuario','placeholder'=>'Usuario'));
	
	
	
	echo $this->Form->input('password',array('label'=>false,'id'=>'passwordLogin','class'=>'contrasena','placeholder'=>'Contraseña'));
	echo $this->Form->end('Entrar');
	?>

</div>
<div class="errores">
			
		<?php echo $this->Session->flash(); ?>
</div>

</div>
