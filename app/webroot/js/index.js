$(function(){
	$('button#botonOpcionCoordi').on('click',opcionesCoordi);
});



function opcionesCoordi()
{
$(this).next().toggle('slow');
}