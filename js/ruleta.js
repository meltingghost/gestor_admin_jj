var showMateria = document.getElementById('showMateria');
var showPregunta = document.getElementById('showPregunta');
var showRespuesta = document.getElementById('showRespuesta');
var showValidacion = document.getElementById('showValidacion');
var showResponseAggPregunta = document.getElementById('showResponseAggPregunta');
var showResponseModificarPregunta = document.getElementById('showResponseModificarPregunta');
var showResponseEliminarPregunta = document.getElementById('showResponseEliminarPregunta');
var showResponseEliminarMateria = document.getElementById('showResponseEliminarMateria');
var showResponseAggMateria = document.getElementById('showResponseAggMateria');
var showResponseModificar = document.getElementById('showResponseModificar');
var spinButton = document.getElementById('spinButton');
var divPrincipalRuleta = document.getElementById('divPrincipalRuleta');
var divAggPreguntaRuleta = document.getElementById('divAggPreguntaRuleta');
var divModificarPreguntaRuleta = document.getElementById('divModificarPreguntaRuleta');
var divAggMateriaRuleta = document.getElementById('divAggMateriaRuleta');
var divModificarMateriaRuleta = document.getElementById('divModificarMateriaRuleta');
var divAyudaRuleta = document.getElementById('divAyudaRuleta');

function myfunction() {

	var animacion = document.getElementById('animacionRing');
	animacion.style.display = 'block';

	var x = 1024;
	  var y = 9999;
	  var deg = Math.floor(Math.random() * (x - y)) + y;
	  document.getElementById('box').style.transform = "rotate(" + deg + "deg)";

	showMateria.style.display = 'block';
	showPregunta.style.display = 'block';
	showRespuesta.style.display = 'block';
	showValidacion.style.display = 'none';
	showResponseAggPregunta.style.display = 'none';
	showResponseModificarPregunta.style.display = 'none';
	showResponseModificar.style.display = 'none';

	  var element = document.getElementById('mainbox');
	  element.classList.remove('animate');
	  setTimeout(function () {
	element.classList.add('animate');

	$('#animacionRing').fadeOut(500);

	// Request a random category from the server
	fetch('procesos/ruleta/randomMateria.php')
	.then(response => response.json())
	.then(data => {
		var selectedMateria = data.materia;

		// Update the HTML content with the selected category
		var materiaElement = document.getElementById('selectedMateria');
		materiaElement.textContent = 'Materia Seleccionada: ' + selectedMateria;
		
		// Retrieve a random question from the selected category
		fetch('procesos/ruleta/randomPregunta.php?materia=' + selectedMateria)
		.then(response => response.json())
		.then(data => {
			var selectedQuestion = data.question;
			var preguntaElement = document.getElementById('selectedPregunta');
			preguntaElement.textContent = 'Pregunta Seleccionada: ' + selectedQuestion;

			// Remove the previous answer input field
			var previousAnswerInput = document.getElementById('solucion');
			var previousAnswerButton = document.getElementById('solucion-boton');
			if (previousAnswerInput) {
				previousAnswerInput.remove();
				previousAnswerButton.remove();
			}

			// Display the question and answer input field
			var answerInput = document.createElement('input');
			answerInput.setAttribute('type', 'text');
			answerInput.setAttribute('name', 'answer');
			answerInput.setAttribute('id', 'solucion');
			answerInput.setAttribute('placeholder', 'Ingrese su respuesta');
			answerInput.classList.add('form-control');
			answerInput.setAttribute('pattern', '[a-zA-ZÁÉÍÓÚáéíóúÑñ,.¿? 1-9]+');
			answerInput.setAttribute('maxlength', '50');
			answerInput.setAttribute('required', '');
			answerInput.setAttribute('onkeyup', 'mayus(this.id, this.value)');
			
			var submitButton = document.createElement('button');
			submitButton.setAttribute('type', 'button');
			submitButton.setAttribute('id', 'solucion-boton');
			submitButton.textContent = 'Enviar';
			submitButton.classList.add('btn');
			submitButton.classList.add('btn-success');
			submitButton.addEventListener('click', function () {
				var userAnswer = answerInput.value;

				// Validate the answer against the correct answer
				fetch('procesos/ruleta/validarPregunta.php?question=' + selectedQuestion + '&answer=' + userAnswer)
				.then(response => response.json())
				.then(data => {
					var isCorrect = data.correct;
					var messageElement = document.getElementById('responseMessage');

					if (isCorrect) {
						showMateria.style.display = 'none';
						showPregunta.style.display = 'none';
						showRespuesta.style.display = 'none';
						showValidacion.style.display = 'block';
						messageElement.textContent = '¡Respuesta Correcta!';
					} else {
						showMateria.style.display = 'none';
						showPregunta.style.display = 'none';
						showRespuesta.style.display = 'none';
						showValidacion.style.display = 'block';
						messageElement.textContent = '¡Respuesta Equivocada!';
					}
				})
				.catch(error => {
					console.error('Error:', error);
				});
				});

			var containerElement = document.getElementById('answerContainer');
			containerElement.appendChild(answerInput);
			containerElement.appendChild(submitButton);
		  })
		  .catch(error => {
			console.error('Error:', error);
		  });
	  })
	  .catch(error => {
		console.error('Error:', error);
	  });
  }, 5000);
}

spinButton.addEventListener('click', function() {
	divPrincipalRuleta.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'none';
	divAggMateriaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
});

var resetCuadroText = (idDiv) => {
	divModificarPreguntaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
	divPrincipalRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var agregarPreguntaRuleta = (idDiv) => {
	showMateria.style.display = 'none';
	showPregunta.style.display = 'none';
	showRespuesta.style.display = 'none';
	showValidacion.style.display = 'none';
	showResponseAggPregunta.style.display = 'none';
	showResponseModificarPregunta.style.display = 'none';
	showResponseEliminarPregunta.style.display = 'none';
	showResponseAggMateria.style.display = 'none';
	showResponseModificar.style.display = 'none';
	showResponseEliminarMateria.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'none';
	divAggMateriaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var modificarPreguntaRuleta = (idDiv) => {
	showMateria.style.display = 'none';
	showPregunta.style.display = 'none';
	showRespuesta.style.display = 'none';
	showValidacion.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'none';
	divAggMateriaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var eliminarPreguntaRuleta = (idDiv) => {
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var agregarMateriaRuleta = (idDiv) => {
	showMateria.style.display = 'none';
	showPregunta.style.display = 'none';
	showRespuesta.style.display = 'none';
	showValidacion.style.display = 'none';
	showResponseAggPregunta.style.display = 'none';
	showResponseModificarPregunta.style.display = 'none';
	showResponseEliminarPregunta.style.display = 'none';
	showResponseAggMateria.style.display = 'none';
	showResponseModificar.style.display = 'none';
	showResponseEliminarMateria.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
	divAggMateriaRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var modificarMateriaRuleta = (idDiv) => {
	showMateria.style.display = 'none';
	showPregunta.style.display = 'none';
	showRespuesta.style.display = 'none';
	showValidacion.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'none';
	divAggMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

var ayudaRuleta = (idDiv) => {
	showMateria.style.display = 'none';
	showPregunta.style.display = 'none';
	showRespuesta.style.display = 'none';
	showValidacion.style.display = 'none';
	showResponseAggPregunta.style.display = 'none';
	showResponseModificarPregunta.style.display = 'none';
	showResponseEliminarPregunta.style.display = 'none';
	showResponseAggMateria.style.display = 'none';
	showResponseModificar.style.display = 'none';
	showResponseEliminarMateria.style.display = 'none';
	divAggPreguntaRuleta.style.display = 'none';
	divModificarPreguntaRuleta.style.display = 'none';
	divModificarMateriaRuleta.style.display = 'none';
	divAyudaRuleta.style.display = 'block';
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}



function agregarMateria() {

	$.ajax({
		url: 'procesos/ruleta/agregarMateria.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAggMateriaRuleta').serialize(),
		success:function(data){
			var messageElementAggMateria = document.getElementById('responseMessageAggMateria');

			if (data == 1) {
				divAggMateriaRuleta.style.display = 'none';
				showResponseAggMateria.style.display = 'block';
				messageElementAggMateria.textContent = '¡Materia Agregada con Exito!';
				$('#formAggMateriaRuleta')[0].reset();
				$('#tablaMaterias').load("vistas/ruleta/tablaMaterias.php");
				$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
				$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
			}

			if (data == 2) {
				$('#formAggMateriaRuleta')[0].reset();
				divAggMateriaRuleta.style.display = 'none';
				showResponseAggMateria.style.display = 'block';
				messageElementAggMateria.textContent = '¡Esta Materia ya está Registrada en el Sistema!';
			}

			if (data == 3) {
				$('#formAggMateriaRuleta')[0].reset();
				divAggMateriaRuleta.style.display = 'none';
				showResponseAggMateria.style.display = 'block';
				messageElementAggMateria.textContent = '¡Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!';
			}

		}
	});

	return false;
	
}



function editarMateria(idMateria) {

	showResponseAggPregunta.style.display = 'none';
	showResponseAggMateria.style.display = 'none';
	showResponseModificar.style.display = 'none';
	
	idMateria = parseInt(idMateria);

	$.ajax({
		url: 'procesos/ruleta/editarMateria.php',
		type: 'POST',
		dataType: 'json',
		data: 'idMateria=' + idMateria,
		success:function(data){

			$('#btnCerrarModalMateriasRuleta').click();
			modificarMateriaRuleta('divModificarMateriaRuleta');
			$('#idMateriaEdit').val(data.id_materia);
			$('#nombreMateriaOld').val(data.nombreMateria);
			$('#nombreMateriaEdit').val(data.nombreMateria);

		}
	});

}



function modificarMateria() {

	$.ajax({
		url: 'procesos/ruleta/modificarMateria.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formModificarMateriaRuleta').serialize(),
		success:function(data){
			var messageElementModificar = document.getElementById('responseMessageModificar');

			if (data == 1) {
				divModificarMateriaRuleta.style.display = 'none';
				divAyudaRuleta.style.display = 'none';
				showResponseModificar.style.display = 'block';
				messageElementModificar.textContent = '¡Materia Modificada con Exito!';
				$('#formModificarMateriaRuleta')[0].reset();
				$('#tablaMaterias').load("vistas/ruleta/tablaMaterias.php");
				$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
				$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
			}

			if (data == 2) {
				divModificarMateriaRuleta.style.display = 'none';
				divAyudaRuleta.style.display = 'none';
				divPrincipalRuleta.style.display = 'none';
				showResponseModificar.style.display = 'block';
				messageElementModificar.textContent = '¡Esta Materia ya está Registrada en el Sistema!';
			}

			if (data == 3) {
				divModificarMateriaRuleta.style.display = 'none';
				divAyudaRuleta.style.display = 'none';
				divPrincipalRuleta.style.display = 'none';
				showResponseModificar.style.display = 'block';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function eliminarMateria(idMateria) {

	idMateria = parseInt(idMateria);

	Swal.fire({
		title: '¿Eliminar?',
		text: "Una vez eliminada no podrá recuperarse la materia!!!.",
		icon: 'warning',
		allowOutsideClick: false,
		allowEscapeKey: false,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, Eliminar',
		cancelButtonText: 'Cancelar'
	}).then((result) => {
		if (result.isConfirmed) {

			$.ajax({
				url: 'procesos/ruleta/eliminarMateria.php',
				type: 'POST',
				dataType: 'json',
				data: 'idMateria=' + idMateria,
				success:function(data) {
					var messageElementEliminarMateria = document.getElementById('responseMessageEliminarMateria');

					if (data == 1) {
						$('#btnCerrarModalMateriasRuleta').click();
						divPrincipalRuleta.style.display = 'none';
						divModificarMateriaRuleta.style.display = 'none';
						divAyudaRuleta.style.display = 'none';
						divAggPreguntaRuleta.style.display = 'none';
						showResponseAggPregunta.style.display = 'none';
						showResponseModificar.style.display = 'none';
						showResponseEliminarMateria.style.display = 'block';
						messageElementEliminarMateria.textContent = '¡Materia Eliminada con Exito!';
						$('#tablaMaterias').load("vistas/ruleta/tablaMaterias.php");
						$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
						$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
					}

					if (data == 2) {
						divPrincipalRuleta.style.display = 'none';
						divModificarMateriaRuleta.style.display = 'none';
						divAyudaRuleta.style.display = 'none';
						divAggPreguntaRuleta.style.display = 'none';
						showResponseAggPregunta.style.display = 'none';
						showResponseModificar.style.display = 'none';
						showResponseEliminarMateria.style.display = 'block';
						messageElementEliminarMateria.textContent = 'Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!';
					}

				}
			});

		}
	});

}



function agregarPregunta() {

	$.ajax({
		url: 'procesos/ruleta/agregarPregunta.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAggPreguntaRuleta').serialize(),
		success:function(data){
			var messageElementAggPregunta = document.getElementById('responseMessageAggPregunta');

			if (data == 1) {
				divAggPreguntaRuleta.style.display = 'none';
				showResponseAggPregunta.style.display = 'block';
				messageElementAggPregunta.textContent = '¡Pregunta Agregada con Éxito!';
				$('#formAggPreguntaRuleta')[0].reset();
				$('#tablaPreguntas').load("vistas/ruleta/tablaPreguntas.php");
				$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
				$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
			}

			if (data == 2) {
				$('#formAggPreguntaRuleta')[0].reset();
				divAggPreguntaRuleta.style.display = 'none';
				showResponseAggPregunta.style.display = 'block';
				messageElementAggPregunta.textContent = '¡Esta Pregunta ya está Registrada en el Sistema!';
			}

			if (data == 3) {
				$('#formAggPreguntaRuleta')[0].reset();
				divAggPreguntaRuleta.style.display = 'none';
				showResponseAggPregunta.style.display = 'block';
				messageElementAggPregunta.textContent = '¡Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!';
			}

		}
	});

	return false;
}



function editarPregunta(idPregunta) {

	showResponseAggPregunta.style.display = 'none';
	showResponseModificarPregunta.style.display = 'none';
	
	idPregunta = parseInt(idPregunta);

	$.ajax({
		url: 'procesos/ruleta/editarPregunta.php',
		type: 'POST',
		dataType: 'json',
		data: 'idPregunta=' + idPregunta,
		success:function(data){
			
			$('#btnCerrarModalPreguntasRuleta').click();
			modificarPreguntaRuleta('divModificarPreguntaRuleta');
			$('#idPreguntaEdit').val(data.id_pregunta);
			$('#idMateriaPEdit').val(data.id_materia);
			$('#preguntaOld').val(data.pregunta);
			$('#preguntaEdit').val(data.pregunta);
			$('#materiaPreguntaEdit').val(data.nombreMateria);
			$('#respuestaEdit').val(data.respuesta);

		}
	});
	
}



function modificarPregunta() {

	$.ajax({
		url: 'procesos/ruleta/modificarPregunta.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formModificarPreguntaRuleta').serialize(),
		success:function(data){
			var messageElementModificarPregunta = document.getElementById('responseMessageModificarPregunta');

			if (data == 1) {
				divModificarPreguntaRuleta.style.display = 'none';
				showResponseModificarPregunta.style.display = 'block';
				messageElementModificarPregunta.textContent = '¡Pregunta Modificada con Exito!';
				$('#formAggPreguntaRuleta')[0].reset();
				$('#tablaPreguntas').load("vistas/ruleta/tablaPreguntas.php");
				$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
				$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
			}

			if (data == 2) {
				divModificarPreguntaRuleta.style.display = 'none';
				divPrincipalRuleta.style.display = 'none';
				showResponseModificarPregunta.style.display = 'block';
				messageElementModificarPregunta.textContent = '¡Esta Pregunta ya está Registrada en el Sistema!';
			}

			if (data == 3) {
				divModificarPreguntaRuleta.style.display = 'none';
				divPrincipalRuleta.style.display = 'none';
				showResponseModificarPregunta.style.display = 'block';
				messageElementModificarPregunta.textContent = 'Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!';
			}

		}
	});

	return false;
}



function eliminarPregunta(idPregunta) {

	idPregunta = parseInt(idPregunta);

	Swal.fire({
		title: '¿Eliminar?',
		text: "Una vez eliminada no podrá recuperarse la pregunta!!!.",
		icon: 'warning',
		allowOutsideClick: false,
		allowEscapeKey: false,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, Eliminar',
		cancelButtonText: 'Cancelar'
	}).then((result) => {
		if (result.isConfirmed) {

			$.ajax({
				url: 'procesos/ruleta/eliminarPregunta.php',
				type: 'POST',
				dataType: 'json',
				data: 'idPregunta=' + idPregunta,
				success:function(data){
					var messageElementEliminarPregunta = document.getElementById('responseMessageEliminarPregunta');

					if (data == 1) {
						$('#btnCerrarModalPreguntasRuleta').click();
						divAggPreguntaRuleta.style.display = 'none';
						divModificarPreguntaRuleta.style.display = 'none';
						divAggMateriaRuleta.style.display = 'none';
						showResponseAggPregunta.style.display = 'none';
						showResponseModificarPregunta.style.display = 'none';
						showResponseEliminarPregunta.style.display = 'block';
						messageElementEliminarPregunta.textContent = '¡Pregunta Eliminada con Exito!';
						$('#tablaPreguntas').load("vistas/ruleta/tablaPreguntas.php");
						$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
						$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
					}

					if (data == 2) {
						divAggPreguntaRuleta.style.display = 'none';
						divModificarPreguntaRuleta.style.display = 'none';
						divAggMateriaRuleta.style.display = 'none';
						showResponseAggPregunta.style.display = 'none';
						showResponseModificarPregunta.style.display = 'none';
						showResponseEliminarPregunta.style.display = 'block';
						messageElementEliminarPregunta.textContent = 'Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!';
					}

				}
			});

		}
	});

}