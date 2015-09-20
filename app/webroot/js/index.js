$(function(){
	$('button#botonOpcionCoordi').on('click',opcionesCoordi);
	$('figure.avatarMaestro').on('click',mostrarMaterias);
});



function opcionesCoordi()
{
$(this).next().toggle('slow');
}


function mostrarMaterias()
{
	$('div.materiasImpartidas').toggle('slow');
}