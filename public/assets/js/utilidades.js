$("#region").change(function(event){
	console.log("llega");
	$.get("provincias/"+event.target.value+"",function(response, state){
		console.log(response);
		$("#provincia").empty();
		for(i=0; i<response.length; i++){
			console.log(response[i].nombre_provincia);
			console.log(response[i].id_provincia);
				$("#provincia").append("<option value='"+response[i].id_provincia+"'>"+response[i].nombre_provincia+"</option>");
		}
	});
});




/*
$("#region").change(event=>{
									console.log("llegue 1");
	$.get('provincias/${event.target.value}', function(res, sta){
		console.log("llegue 2");
		$("#provincia").empty();
								console.log("llegue 3");
		res.forEach(element=> {
								console.log("llegeeeee");
			$("#provincia").append('<option value=${element.id_provincia}> ${element.nombre_provincia} </option>');
		});
	});
});
*/

$("#provincia").change(function(event){
	console.log("llega");
	$.get("comunas/"+event.target.value+"",function(response, state){
		console.log(response);
		$("#comuna").empty();
		for(i=0; i<response.length; i++){
			console.log(response[i].nombre_comuna);
			console.log(response[i].id_comuna);
				$("#comuna").append("<option value='"+response[i].id_comuna+"'>"+response[i].nombre_comuna+"</option>");
		}
	});
});