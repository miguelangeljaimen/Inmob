
$("#region").change(function(event){
	console.log("llega");
	$.get("provincias/"+event.target.value+"",function(response, state){
		console.log(response);
		$("#provincia").empty();
		$("#provincia").append("<option value='0'>Escoja una provincia</option>");
		for(i=0; i<response.length; i++){
			/*console.log(response[i].nombre_provincia);
			console.log(response[i].id_provincia);*/
				$("#provincia").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
		}
	});
});

$("#provincia").change(function(event){
	//console.log("llega");
	$.get("comunas/"+event.target.value+"",function(response, state){
		//console.log(response);
		$("#comuna").empty();
		$("#comuna").append("<option value='0'>Escoja una comuna</option>");
		for(i=0; i<response.length; i++){
			/*console.log(response[i].nombre);
			console.log(response[i].id);*/
				$("#comuna").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
		}
	});
});