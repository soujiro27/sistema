<div class="demo-layout-transparent mdl-layout mdl-js-layout">
   <?php 

  echo $this->element('menu');
   ?>
  <main class="mdl-layout__content verAsistencias">
  	<h3>Asistencias</h3>
			
<select id="asistenciaCarrera" data-tipo="<?php echo $current_user['group_id']; ?>">
		<option value="txt">Carrera</option>
		<?php 
			if($current_user['group_id']== 6 ){
			foreach($carreras as $k =>$carrera){
			echo '<option value="'.$carrera['career_id'].'">'.$carrera['career_abrev'].'</option>';
			
												}
			}else if($current_user['group_id']== 5){
		foreach($carreras as $k =>$carrera){
			echo '<option value="'.$carrera['Career']['id'].'">'.$carrera['Career']['abrev'].'</option>';
			
												}
			}

		?>
</select>
	

<select  id="cuatriAsistencia" >
	<option value="txt">Cuatrimestre</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>

<select id="materiaAsistencia">
	<option value="txt">Sin materias</option>
</select>

<select  id="asistGrupo">
	<option value="txt">Sin grupos</option>
	
</select>

<form id="opcionBusqueda">
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="busca" value="dia"/>
  <span class="mdl-radio__label">Por Dia</span>
</label>

<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="busca" value="rango" />
  <span class="mdl-radio__label">Por Rango</span>
</label>



</form>




	
<input type="text"  id="fechaAsistencia1" class="datepicker"    placeholder="Fecha Inicio">
<input type="text"  id="fechaAsistencia2" class="datepicker"    placeholder="Fecha Final">
<button id="buscaAsistencia">Buscar</button>

<div id="seccionAsistencias">
	
<table id="resultadosAsistencias" class="tablaAsistencias">

	<tr class="encabezadosTabla">
		<th class="headerNombre">Nombre</th>
		<th class="headerFecha">Fecha</th>
		<th class="headerStatus">Estatus</th>
		<th class="notasAsistencia mdl-data-table__cell--non-numeric">Nota</th>
		<?php 

		if($current_user['group_id']==6){

		echo "<th class='notasAsistencia'>Editar</th>";
		}

		?>
	</tr>
</table>
</div>






  </main>
</div>

<?php 

	// if($current_user['group_id']==6){


echo $this->Html->script('scripts');

	//}
?>
