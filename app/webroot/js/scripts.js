
	function modificaIDSC() {

			$("#myTbody > tr.campoModulo").each(
				function(i){

				var matName='data[CourseModule]['+((i+1)-1)+']';
				var matId='CourseModule'+((i+1)-1)+'';

				console.log(matName);

				$('#myTbody tr.campoModulo:last td div.input.select').children('select').eq(0).attr({id :''+matId+'CourseId'});
				$('#myTbody  tr.campoModulo:last  td div.input.select').children('select').eq(0).attr({name :''+matName+'[course_id]'});
				$('#myTbody  tr.campoModulo:last  td div.input.select').children('select').eq(1).attr({name :''+matName+'[career_id]'});
				$('#myTbody tr.campoModulo:last td div.input.select').children('select').eq(1).attr({id :''+matId+'CareerId'});
				$('#myTbody  tr.campoModulo:last  td div.input.select').children('select').eq(2).attr({name :''+matName+'[day]'});
				$('#myTbody tr.campoModulo:last td div.input.select').children('select').eq(2).attr({id :''+matId+'Day'});

				$('#myTbody  tr.campoModulo:last  td div.input.time').children('select').eq(0).attr({name :''+matName+'[start_time][hour]'});
				$('#myTbody tr.campoModulo:last td div.input.time').children('select').eq(0).attr({id :''+matId+'StartTimeHour'});

				$('#myTbody  tr.campoModulo:last  td div.input.time').children('select').eq(1).attr({name :''+matName+'[start_time][min]'});
				$('#myTbody tr.campoModulo:last td div.input.time').children('select').eq(1).attr({id :''+matId+'StartTimeMin'});

				$('#myTbody  tr.campoModulo:last  td div.input.time').children('select').eq(2).attr({name :''+matName+'[start_time][meridian]'});
				$('#myTbody tr.campoModulo:last td div.input.time').children('select').eq(2).attr({id :''+matId+'StartTimeMeridian'});

				$('#myTbody  tr.campoModulo:last  td.tFin div.input.time').children('select').eq(0).attr({name :''+matName+'[end_time][hour]'});
				$('#myTbody tr.campoModulo:last td.tFin div.input.time').children('select').eq(0).attr({id :''+matId+'EndTimeHour'});

				$('#myTbody  tr.campoModulo:last  td.tFin div.input.time').children('select').eq(1).attr({name :''+matName+'[end_time][min]'});
				$('#myTbody tr.campoModulo:last td.tFin div.input.time').children('select').eq(1).attr({id :''+matId+'EndTimeMin'});

				$('#myTbody  tr.campoModulo:last  td.tFin div.input.time').children('select').eq(2).attr({name :''+matName+'[end_time][meridian]'});
				$('#myTbody tr.campoModulo:last td.tFin div.input.time').children('select').eq(2).attr({id :''+matId+'EndTimeMeridian'});



			
				i++;
				});

			}

	function elimina(){
		$("#myTbody > tr>td >input.elimina").click(function(){
			var numR=$("#myTbody>tr").length;
			if( numR > 2){
			$(this).parent('td').parent('tr').remove();
			}else {
				console.log('no se puede eliminar');
			}
			
		});
		
	}

	function clona() {
		$("p.agrega").click(function(){
			
			var x=$('#myTbody >tr:last').clone(true);
			//verificar data name e ir sumando 1o
			$("#myTbody").append(x);
			modificaIDSC();

		});
	}

// function materiasXCarrera(){
// 			$('#career_id').on('change', function(){
// 			$.ajax({
// 			  type: "GET",
// 			  url: "../careers/getCoursesByCareerId/"  + $(this).val(),
// 			  success : function(response){
// 			  	// Aqui construyes tu select
// 			  	console.info(response.length );
// 			  	if(typeof response !==  'undefined' && response.length > 0) {
// 			  		var items = [];
// 			  		for(var i=0, numOptions = response.length; i<numOptions;  i++){
// 						items.push('<option value="'+response[i].Course.id+'">'+response[i].Course.name+'</option>');
// 			  		}
// 			  		$('#course_id').html(items.join(''));
// 			  	} else {
// 			  		$('#course_id').html('');
// 			  	}
// 			  	console.log(response);
// 			  }
// 			});

// 		});
		

// }

$(function(){
	clona();
	elimina();
});