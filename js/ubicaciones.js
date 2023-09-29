// MODAL AGREGAR ESTUDIANTE INICIAL
function mostrarMunicipioNatalEI(estado) {

	$.ajax({
		url: 'ubicaciones/selectMunicipioNatalEI.php',
		type: 'POST',
		dataType: 'json',
		data: 'estado=' + estado,
		success:function(cadena){
			$('#cargarMunicipioNatalEI').html(cadena);
		}
	});

}



function mostrarParroquiaNatalEI(municipio) {

	$.ajax({
		url: 'ubicaciones/selectParroquiaNatalEI.php',
		type: 'POST',
		dataType: 'json',
		data: 'municipio=' + municipio,
		success:function(cadena){
			$('#cargarParroquiaNatalEI').html(cadena);
		}
	});
	
}



// MODAL EDITAR ESTUDIANTE INICIAL
function mostrarMunicipioNatalEIEdit(estado) {

	$.ajax({
		url: 'ubicaciones/selectMunicipioNatalEIEdit.php',
		type: 'POST',
		dataType: 'json',
		data: 'estado=' + estado,
		success:function(cadena){
			$('#cargarMunicipioNatalEIEdit').html(cadena);
		}
	});

}



function mostrarParroquiaNatalEIEdit(municipio) {

	$.ajax({
		url: 'ubicaciones/selectParroquiaNatalEIEdit.php',
		type: 'POST',
		dataType: 'json',
		data: 'municipio=' + municipio,
		success:function(cadena){
			$('#cargarParroquiaNatalEIEdit').html(cadena);
		}
	});
	
}



// MODAL AGREGAR ESTUDIANTE DE BASICA
function mostrarMunicipioNatalEB(estado) {

	$.ajax({
		url: 'ubicaciones/selectMunicipioNatalEB.php',
		type: 'POST',
		dataType: 'json',
		data: 'estado=' + estado,
		success:function(cadena){
			$('#cargarMunicipioNatalEB').html(cadena);
		}
	});

}



function mostrarParroquiaNatalEB(municipio) {

	$.ajax({
		url: 'ubicaciones/selectParroquiaNatalEB.php',
		type: 'POST',
		dataType: 'json',
		data: 'municipio=' + municipio,
		success:function(cadena){
			$('#cargarParroquiaNatalEB').html(cadena);
		}
	});
	
}



// MODAL EDITAR ESTUDIANTE DE BASICA
function mostrarMunicipioNatalEBEdit(estado) {

	$.ajax({
		url: 'ubicaciones/selectMunicipioNatalEBEdit.php',
		type: 'POST',
		dataType: 'json',
		data: 'estado=' + estado,
		success:function(cadena){
			$('#cargarMunicipioNatalEBEdit').html(cadena);
		}
	});

}



function mostrarParroquiaNatalEBEdit(municipio) {

	$.ajax({
		url: 'ubicaciones/selectParroquiaNatalEBEdit.php',
		type: 'POST',
		dataType: 'json',
		data: 'municipio=' + municipio,
		success:function(cadena){
			$('#cargarParroquiaNatalEBEdit').html(cadena);
		}
	});
	
}