// VALIDAR CAMPOS modalAgregarEstudianteI
var formAgregarEI = document.getElementById('formAgregarEstudianteI');
var inputsAgregarEIPart1 = document.querySelectorAll('#aggEIPart1 input');
var inputsAgregarEIPart2 = document.querySelectorAll('#aggEIPart2 input');
var inputsAgregarEIPart3 = document.querySelectorAll('#aggEIPart3 input');
var inputsAgregarEIPart4 = document.querySelectorAll('#aggEIPart4 input');
var textareaAgregarEI = document.querySelectorAll('#formAgregarEstudianteI textarea');

var expresionesAgregarEI = {
	textoNone: /^[a-zA-ZÀ-ÿ\s]{0,100}$/,
	texto : /^[a-zA-ZÀ-ÿ\s]{3,100}$/,
	varios: /^[a-zA-ZÀ-ÿ\s\0-9\_\-]{4,200}$/,
	cedulaE: /^\d{8,11}$/,
	cedulaNone: /^\d{0,8}$/,
	cedula: /^\d{7,8}$/,
	edad: /^\d{0,2}$/,
	edadRequired: /^\d{2,2}$/,
	telefono: /^\d{0,20}$/,
	telefonoRequired: /^\d{7,20}$/
}

var camposAgregarEI = {

	// PARTE I
	apellidosEI: false,
	nombresEI: false,
	cEscolarEI: false,
	lugarNacimientoEI: false,
	fechaNacimientoEI: false,
	estadoNatalEI: false,
	municipioNatalEI: false,
	parroquiaNatalEI: false,
	direccionHabitacionEI: false,

	// PARTE II
	parentescoREI1: false,
	nombreCompletoREI1: false,
	cedulaREI1: false,
	edadREI1: false,
	nacionalidadREI1: false,
	gradoInstrucionREI1: false,
	trabajaREI1: false,
	direccionTrabajoREI1: false,
	viveREI1: false,
	telefonoCasaREI1: false,
	telefonoCelREI1: false,
	direccionHabitacionREI1: false,
	nombreCompletoREI2: false,
	cedulaREI2: false,
	edadREI2: false,
	trabajaREI2: false,
	viveREI2: false,
	telefonoCasaREI2: false,
	telefonoCelREI2: false,
	situacionPadresEI: false,

	// PARTE III
	localizarFEI: false,
	dondeQuienViveEI: false,
	tipoPartoEI: false,
	fiebreMedicamentoEI: false,

	// PARTE IV
	atencionAdultaEI: false

}

// VALIDAR CLICK, BLUR, KEYUP (INPUTS, RADIO)
var validarFormAgregarEI = (e) => {

	switch (e.target.name) {

		// PARTE I
		case "apellidosEI":
			validarCampoAgregarEI(expresionesAgregarEI.texto, e.target, e.target.name);
		break;

		case "nombresEI":
			validarCampoAgregarEI(expresionesAgregarEI.texto, e.target, e.target.name);
		break;

		case "cEscolarEI":
			validarCampoAgregarEI(expresionesAgregarEI.cedulaE, e.target, e.target.name);
		break;

		case "lugarNacimientoEI":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case "direccionHabitacionEI":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		// PARTE II
		case "nombreCompletoREI1":
			validarCampoAgregarEI(expresionesAgregarEI.texto, e.target, e.target.name);
		break;

		case "cedulaREI1":
			validarCampoAgregarEI(expresionesAgregarEI.cedula, e.target, e.target.name);
		break;

		case "edadREI1":
			validarCampoAgregarEI(expresionesAgregarEI.edadRequired, e.target, e.target.name);
		break;

		case "nacionalidadREI1":
			validarCampoAgregarEI(expresionesAgregarEI.texto, e.target, e.target.name);
		break;

		case "gradoInstrucionREI1":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case 'trabajaREI1':
			validarTrabajaREI1();
		break;

		case "direccionTrabajoREI1":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case 'viveREI1':
			validarViveREI1();
		break;

		case "telefonoCasaREI1":
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, e.target, e.target.name);
		break;

		case "telefonoCelREI1":
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, e.target, e.target.name);
		break;

		case "direccionHabitacionREI1":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case "nombreCompletoREI2":
			validarCampoAgregarEI(expresionesAgregarEI.textoNone, e.target, e.target.name);
		break;

		case "cedulaREI2":
			validarCampoAgregarEI(expresionesAgregarEI.cedulaNone, e.target, e.target.name);
		break;

		case "edadREI2":
			validarCampoAgregarEI(expresionesAgregarEI.edad, e.target, e.target.name);
		break;

		case 'trabajaREI2':
			validarTrabajaREI2();
		break;

		case 'viveREI2':
			validarViveREI2();
		break;

		case "telefonoCasaREI2":
			validarCampoAgregarEI(expresionesAgregarEI.telefono, e.target, e.target.name);
		break;

		case "telefonoCelREI2":
			validarCampoAgregarEI(expresionesAgregarEI.telefono, e.target, e.target.name);
		break;

		case 'situacionPadresEI':
			validarSituacionPadresEI();
		break;
		
		// PARTE III
		case "localizarFEI":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case "dondeQuienViveEI":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		case 'tipoPartoEI':
			validarTipoPartoEI();
		break;

		case "fiebreMedicamentoEI":
			validarCampoAgregarEI(expresionesAgregarEI.varios, e.target, e.target.name);
		break;

		// PARTE IV
		case 'atencionAdultaEI':
			validarAtencionAdultaEI();
		break;

	}

}

var validarCampoAgregarEI = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarEI[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		camposAgregarEI[campo] = false;
	}
}

function activarInputsAgregarEIPart1() {
	inputsAgregarEIPart1.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEI);
		input.addEventListener('blur', validarFormAgregarEI);
	});
}

function activarInputsAgregarEIPart2() {
	inputsAgregarEIPart2.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEI);
		input.addEventListener('blur', validarFormAgregarEI);
		input.addEventListener('click', validarFormAgregarEI);
	});
}

function activarInputsAgregarEIPart3() {
	inputsAgregarEIPart3.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEI);
		input.addEventListener('blur', validarFormAgregarEI);
		input.addEventListener('click', validarFormAgregarEI);
	});
}

function activarTextareaAgregarEIPart3() {
	textareaAgregarEI.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEI);
		input.addEventListener('blur', validarFormAgregarEI);
		input.addEventListener('click', validarFormAgregarEI);
	});
}

function activarInputsAgregarEIPart4() {
	inputsAgregarEIPart4.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEI);
		input.addEventListener('blur', validarFormAgregarEI);
		input.addEventListener('click', validarFormAgregarEI);
	});
}

// VALIDAR CHANGE (SELECT, DATE)
var validarSeleccionAgregarEI = (input, campo, div) => {
	if (input.value == 0 || input.value == "") {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		if (div != '') {
			seleccionarDivAgregarEI(div);
		} else {
			seleccionarAgregarEI(campo);
		}
		camposAgregarEI[campo] = false;
	} else {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarEI[campo] = true;
	}
}

var seleccionarAgregarEI = (campo) => {
	$(document).ready(function(){
		$(`#${campo}`).change(function() {

			switch (campo) {

				case 'fechaNacimientoEI':
					validarFechaNacimientoEI();
				break;

				case 'estadoNatalEI':
					validarEstadoNatalEI();
				break;

				case 'parentescoREI1':
					validarParentescoREI1();
				break;

			}

		});
	});
}

var seleccionarDivAgregarEI = (div) => {
	$(document).ready(function(){
		$(`#${div}`).change(function() {

			switch (div) {

				case 'cargarMunicipioNatalEI':
					validarMunicipioNatalEI();
				break;

				case 'cargarParroquiaNatalEI':
					validarParroquiaNatalEI();
				break;

			}

		});
	});
}

// EVENTOS DEL FORMULARIO DE REGISTRO DE ESTUDIANTES INICIAL
$(document).ready(function(){

	//PARTES DEL FORMULARIO PARA AGREGAR ESTUDIANTES DE EDUCACIÓN INICIAL
	var aggEIPart1 = document.getElementById('aggEIPart1');
	var aggEIPart2 = document.getElementById('aggEIPart2');
	var aggEIPart3 = document.getElementById('aggEIPart3');
	var aggEIPart4 = document.getElementById('aggEIPart4');
	var aggEIPart5 = document.getElementById('aggEIPart5');

	//BARRA DE ESTADO DEL FORMULARIO DE ESTUDIANTES DE EDUCACIÓN INICIAL
	var step1 = document.getElementById('step1');
	var step2 = document.getElementById('step2');
	var step3 = document.getElementById('step3');
	var step4 = document.getElementById('step4');
	var step5 = document.getElementById('step5');

	$('#btnGoAggEIPart2').click(function(){

		validarApellidosEI();
		validarNombresEI();
		validarCedulaEscolarEI();
		validarFechaNacimientoEI();
		validarLugarNacimientoEI();
		validarEstadoNatalEI();
		validarMunicipioNatalEI();
		validarParroquiaNatalEI();
		validarDireccionHabitacionEI();

		activarInputsAgregarEIPart1();

		if (camposAgregarEI.apellidosEI && camposAgregarEI.nombresEI && camposAgregarEI.cEscolarEI && camposAgregarEI.lugarNacimientoEI && camposAgregarEI.fechaNacimientoEI && camposAgregarEI.estadoNatalEI && camposAgregarEI.municipioNatalEI && camposAgregarEI.parroquiaNatalEI && camposAgregarEI.direccionHabitacionEI) {
			
			step1.className = document.getElementById("step1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step2.className += " active";
			aggEIPart1.style.display = 'none';
			aggEIPart2.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});

		 }

	});

	$('#btnBackAggEIPart1').click(function(){
		step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step1.className += " active";
		aggEIPart1.style.display = 'block';
		aggEIPart2.style.display = 'none';
	});

	$('#btnGoAggEIPart3').click(function(){

		validarParentescoREI1();
		validarNombreCompletoREI1();
		validarCedulaREI1();
		validarEdadREI1();
		validarNacionalidadREI1();
		validarGradoInstrucionREI1();
		validarTrabajaREI1();
		validarDireccionTrabajoREI1();
		validarViveREI1();
		validarTelefonoCasaREI1();
		validarTelefonoCelREI1();
		validarDireccionHabitacionREI1();

		validarNombreCompletoREI2();
		validarCedulaREI2();
		validarEdadREI2();
		validarTrabajaREI2();
		validarViveREI2();
		validarTelefonoCasaREI2();
		validarTelefonoCelREI2();

		validarSituacionPadresEI();

		activarInputsAgregarEIPart2();

		if (camposAgregarEI.parentescoREI1 && camposAgregarEI.nombreCompletoREI1 && camposAgregarEI.cedulaREI1 && camposAgregarEI.edadREI1 && camposAgregarEI.nacionalidadREI1 && camposAgregarEI.gradoInstrucionREI1 && camposAgregarEI.trabajaREI1 && camposAgregarEI.direccionTrabajoREI1 && camposAgregarEI.viveREI1 && camposAgregarEI.telefonoCasaREI1 && camposAgregarEI.telefonoCelREI1 && camposAgregarEI.direccionHabitacionREI1 && camposAgregarEI.nombreCompletoREI2 && camposAgregarEI.cedulaREI2 && camposAgregarEI.edadREI2 && camposAgregarEI.trabajaREI2 && camposAgregarEI.viveREI2 && camposAgregarEI.situacionPadresEI && camposAgregarEI.telefonoCasaREI2 && camposAgregarEI.telefonoCelREI2) {
			
			step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step3.className += " active";
			aggEIPart2.style.display = 'none';
			aggEIPart3.style.display = 'block';
			
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}
		
	});

	$('#btnBackAggEIPart2').click(function(){
		step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step2.className += " active";
		aggEIPart2.style.display = 'block';
		aggEIPart3.style.display = 'none';
	});

	$('#btnGoAggEIPart4').click(function(){

		validarLocalizarFEI();
		validarDondeQuienViveEI();
		validarTipoPartoEI();
		validarFiebreMedicamentoEI();

		activarInputsAgregarEIPart3();
		activarTextareaAgregarEIPart3();

		if (camposAgregarEI.localizarFEI && camposAgregarEI.dondeQuienViveEI && camposAgregarEI.tipoPartoEI && camposAgregarEI.fiebreMedicamentoEI) {
			
			step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step4.className += " active";
			aggEIPart3.style.display = 'none';
			aggEIPart4.style.display = 'block';
			
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

	$('#btnBackAggEIPart3').click(function(){
		step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step3.className += " active";
		aggEIPart3.style.display = 'block';
		aggEIPart4.style.display = 'none';
	});

	$('#btnGoAggEIPart5').click(function(){

		validarAtencionAdultaEI();

		activarInputsAgregarEIPart4();

		if (camposAgregarEI.atencionAdultaEI) {
			
			step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step5.className += " active";
			aggEIPart4.style.display = 'none';
			aggEIPart5.style.display = 'block';
			
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

	$('#btnBackAggEIPart4').click(function(){
		step5.className = document.getElementById("step5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step4.className += " active";
		aggEIPart4.style.display = 'block';
		aggEIPart5.style.display = 'none';
	});

});



// VALIDAR CAMPOS modalAgregarEstudianteB
var formAgregarEB = document.getElementById('formAgregarEstudianteB');
var inputsAgregarEBPart1 = document.querySelectorAll('#aggEBPart1 input');
var inputsAgregarEBPart2 = document.querySelectorAll('#aggEBPart2 input');
var textareaAgregarEB = document.querySelectorAll('#formAgregarEstudianteB textarea');

var expresionesAgregarEB = {
	textoNone: /^[a-zA-ZÀ-ÿ\s]{0,100}$/,
	texto : /^[a-zA-ZÀ-ÿ\s]{3,100}$/,
	varios: /^[a-zA-ZÀ-ÿ\s\0-9\_\-]{4,200}$/,
	cedulaE: /^\d{8,11}$/,
	cedulaNone: /^\d{0,8}$/,
	cedula: /^\d{7,8}$/,
	edad: /^\d{0,2}$/,
	edadRequired: /^\d{2,2}$/,
	telefono: /^\d{0,20}$/,
	telefonoRequired: /^\d{7,20}$/
}

var camposAgregarEB = {

	// PARTE I
	apellidosEB: false,
	nombresEB: false,
	lugarNacimientoEB: false,
	fechaNacimientoEB: false,
	sexoEB: false,
	cedulaEB: false,
	estadoNatalEB: false,
	municipioNatalEB: false,
	parroquiaNatalEB: false,
	direccionEB: false,
	gradoCursarEB: false,
	seccionGradoCursarEB: false,

	// PARTE II
	nombreCompletoREB: false,
	fechaNacimientoREB: false,
	cedulaREB: false,
	gradoInstruccionREB: false,
	ocupacionREB: false,
	lugarTrabajoREB: false,
	telefonoREB: false,
	direccionHabitacionREB: false,
	parentescoREB: false,
	rSustitutoEB: false,
	fechaNacimientoRSEB: false,
	cedulaRSEB: false,
	telefonoRSEB: false,
	direccionHabitacionRSEB: false

}

// VALIDAR CLICK, BLUR, KEYUP (INPUTS, RADIO)
var validarFormAgregarEB = (e) => {

	switch (e.target.name) {

		// PARTE I
		case "apellidosEB":
			validarCampoAgregarEB(expresionesAgregarEB.texto, e.target, e.target.name);
		break;

		case "nombresEB":
			validarCampoAgregarEB(expresionesAgregarEB.texto, e.target, e.target.name);
		break;

		case "lugarNacimientoEB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "sexoEB":
			validarSexoEB();
		break;

		case "cedulaEB":
			validarCampoAgregarEB(expresionesAgregarEB.cedulaE, e.target, e.target.name);
		break;

		case "direccionEB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		// PARTE II
		case "nombreCompletoREB":
			validarCampoAgregarEB(expresionesAgregarEB.texto, e.target, e.target.name);
		break;

		case "cedulaREB":
			validarCampoAgregarEB(expresionesAgregarEB.cedula, e.target, e.target.name);
		break;

		case "gradoInstruccionREB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "ocupacionREB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "lugarTrabajoREB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "telefonoREB":
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, e.target, e.target.name);
		break;

		case "direccionHabitacionREB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "parentescoREB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "rSustitutoEB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

		case "cedulaRSEB":
			validarCampoAgregarEB(expresionesAgregarEB.cedula, e.target, e.target.name);
		break;

		case "telefonoRSEB":
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, e.target, e.target.name);
		break;

		case "direccionHabitacionRSEB":
			validarCampoAgregarEB(expresionesAgregarEB.varios, e.target, e.target.name);
		break;

	}

}

var validarCampoAgregarEB = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarEB[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		camposAgregarEB[campo] = false;
	}
}

function activarInputsAgregarEBPart1() {
	inputsAgregarEBPart1.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEB);
		input.addEventListener('blur', validarFormAgregarEB);
		input.addEventListener('click', validarFormAgregarEB);
	});
}

function activarInputsAgregarEBPart2() {
	inputsAgregarEBPart2.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarEB);
		input.addEventListener('blur', validarFormAgregarEB);
	});
}

// VALIDAR CHANGE (SELECT, DATE)
var validarSeleccionAgregarEB = (input, campo, div) => {
	if (input.value == 0 || input.value == "") {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		if (div != '') {
			seleccionarDivAgregarEB(div);
		} else {
			seleccionarAgregarEB(campo);
		}
		camposAgregarEB[campo] = false;
	} else {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarEB[campo] = true;
	}
}

var seleccionarAgregarEB = (campo) => {
	$(document).ready(function(){
		$(`#${campo}`).change(function() {

			switch (campo) {

				case 'fechaNacimientoEB':
					validarFechaNacimientoEB();
				break;

				case 'estadoNatalEB':
					validarEstadoNatalEB();
				break;

				case 'gradoCursarEB':
					validarGradoCursarEB();
				break;

				case 'fechaNacimientoREB':
					validarFechaNacimientoREB();
				break;

				case 'fechaNacimientoRSEB':
					validarFechaNacimientoRSEB();
				break;

			}

		});
	});
}

var seleccionarDivAgregarEB = (div) => {
	$(document).ready(function(){
		$(`#${div}`).change(function() {

			switch (div) {

				case 'cargarMunicipioNatalEB':
					validarMunicipioNatalEB();
				break;

				case 'cargarParroquiaNatalEB':
					validarParroquiaNatalEB();
				break;

				case 'cargarSeccionGradoCursarEB':
					validarSeccionGradoCursarEB();
				break;

			}

		});
	});
}

// EVENTOS DEL FORMULARIO DE REGISTRO DE ESTUDIANTES DE BÁSICA
$(document).ready(function(){

	//PARTES DEL FORMULARIO PARA AGREGAR ESTUDIANTES DE EDUCACIÓN BÁSICA
	var aggEBPart1 = document.getElementById('aggEBPart1');
	var aggEBPart2 = document.getElementById('aggEBPart2');
	var aggEBPart3 = document.getElementById('aggEBPart3');

	//BARRA DE ESTADO DEL FORMULARIO DE ESTUDIANTES DE EDUCACIÓN BÁSICA
	var step1 = document.getElementById('step1EB');
	var step2 = document.getElementById('step2EB');
	var step3 = document.getElementById('step3EB');

	$('#btnGoAggEBPart2').click(function(){

		validarApellidosEB();
		validarNombresEB();
		validarLugarNacimientoEB();
		validarFechaNacimientoEB();
		validarSexoEB();
		validarCedulaEB();
		validarEstadoNatalEB();
		validarMunicipioNatalEB();
		validarParroquiaNatalEB();
		validarDireccionEB();
		validarGradoCursarEB();
		validarSeccionGradoCursarEB();

		activarInputsAgregarEBPart1();

		if (camposAgregarEB.apellidosEB && camposAgregarEB.nombresEB && camposAgregarEB.lugarNacimientoEB && camposAgregarEB.fechaNacimientoEB && camposAgregarEB.sexoEB && camposAgregarEB.cedulaEB && camposAgregarEB.estadoNatalEB && camposAgregarEB.municipioNatalEB && camposAgregarEB.parroquiaNatalEB && camposAgregarEB.direccionEB && camposAgregarEB.gradoCursarEB && camposAgregarEB.seccionGradoCursarEB) {
			
			step1.className = document.getElementById("step1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step2.className += " active";
			aggEBPart1.style.display = 'none';
			aggEBPart2.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});

		}

	});

	$('#btnBackAggEBPart1').click(function(){
		step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step1.className += " active";
		aggEBPart1.style.display = 'block';
		aggEBPart2.style.display = 'none';
	});

	$('#btnGoAggEBPart3').click(function(){

		validarNombreCompletoREB();
		validarFechaNacimientoREB();
		validarCedulaREB();
		validarGradoInstruccionREB();
		validarOcupacionREB();
		validarLugarTrabajoREB();
		validarTelefonoREB();
		validarDireccionHabitacionREB();
		validarParentescoREB();
		validarRSustitutoEB();
		validarFechaNacimientoRSEB();
		validarCedulaRSEB();
		validarTelefonoRSEB();
		validarDireccionHabitacionRSEB();

		activarInputsAgregarEBPart2();

		if (camposAgregarEB.nombreCompletoREB && camposAgregarEB.fechaNacimientoREB && camposAgregarEB.cedulaREB && camposAgregarEB.gradoInstruccionREB && camposAgregarEB.ocupacionREB && camposAgregarEB.lugarTrabajoREB && camposAgregarEB.telefonoREB && camposAgregarEB.direccionHabitacionREB && camposAgregarEB.parentescoREB && camposAgregarEB.rSustitutoEB && camposAgregarEB.fechaNacimientoRSEB && camposAgregarEB.cedulaRSEB && camposAgregarEB.telefonoRSEB && camposAgregarEB.direccionHabitacionRSEB) {
			
			step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step3.className += " active";
			aggEBPart2.style.display = 'none';
			aggEBPart3.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});

		}
		
	});

	$('#btnBackAggEBPart2').click(function(){
		step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step2.className += " active";
		aggEBPart2.style.display = 'block';
		aggEBPart3.style.display = 'none';
	});

});



// VALIDAR CAMPOS modalAgregarPersonal
var formAgregarPersonal = document.getElementById('formAgregarPersonal');
var inputsAgregarPersonalPart1 = document.querySelectorAll('#aggPersonalPart1 input');
var inputsAgregarPersonalPart2 = document.querySelectorAll('#aggPersonalPart2 input');
var inputsAgregarPersonalPart3 = document.querySelectorAll('#aggPersonalPart3 input');
var textareaAgregarPersonal = document.querySelectorAll('#formAgregarPersonal textarea');

var expresionesAgregarPersonal = {
	textoNone: /^[a-zA-ZÀ-ÿ\s]{0,100}$/,
	texto : /^[a-zA-ZÀ-ÿ\s]{3,100}$/,
	varios: /^[a-zA-ZÀ-ÿ\s\0-9\_\-]{4,200}$/,
	cedulaNone: /^\d{0,8}$/,
	cedula: /^\d{7,8}$/,
	edad: /^\d{0,2}$/,
	edadRequired: /^\d{2,2}$/,
	telefono: /^\d{0,20}$/,
	telefonoRequired: /^\d{7,20}$/,
	correo : /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/,
	cuenta: /^\d{20,20}$/
}

var camposAgregarPersonal = {

	// PARTE I
	tipoPersonal: false,
	codigoPersonal: false,

	// PARTE II
	nombreCompletoPersonal: false,
	cedulaPersonal: false,
	fechaNacimientoPersonal: false,
	sexoPersonal: false,
	nivelInstrucionPersonal: false,
	egresadoPersonal: false,
	direccionPersonal: false,
	telefonoPersonal: false,
	telefono2Personal: false,
	telefonoOpcionalPersonal: false,
	correoPersonal: false,
	cuentaNominaPersonal: false,

	// PARTE III
	funcionPersonal: false,
	fechaIngresoPersonal: false,
	codigoVoucherPersonal: false,
	cargoVoucherPersonal: false,
	adscritoPersonal: false
	

}

// VALIDAR CLICK, BLUR, KEYUP (INPUTS, RADIO)
var validarFormAgregarPersonal = (e) => {

	switch (e.target.name) {

		// PARTE I
		case 'tipoPersonal':
			validarTipoPersonal();
		break;

		case "codigoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		// PARTE II
		case "nombreCompletoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.texto, e.target, e.target.name);
		break;

		case "cedulaPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.cedula, e.target, e.target.name);
		break;

		case 'sexoPersonal':
			validarSexoPersonal();
		break;

		case "nivelInstrucionPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		case "egresadoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		case "direccionPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		case "telefonoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.telefonoRequired, e.target, e.target.name);
		break;

		case "telefono2Personal":
			validarCampoAgregarEI(expresionesAgregarPersonal.telefono, e.target, e.target.name);
		break;

		case "telefonoOpcionalPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.telefono, e.target, e.target.name);
		break;

		case "correoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.correo, e.target, e.target.name);
		break;

		case "cuentaNominaPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.cuenta, e.target, e.target.name);
		break;

		// PARTE III
		case "codigoVoucherPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		case "cargoVoucherPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

		case "adscritoPersonal":
			validarCampoAgregarEI(expresionesAgregarPersonal.varios, e.target, e.target.name);
		break;

	}

}

var validarCampoAgregarPersonal = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarPersonal[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		camposAgregarPersonal[campo] = false;
	}
}

function activarInputsAgregarPersonalPart1() {
	inputsAgregarPersonalPart1.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarPersonal);
		input.addEventListener('blur', validarFormAgregarPersonal);
		input.addEventListener('click', validarFormAgregarPersonal);
	});
}

function activarInputsAgregarPersonalPart2() {
	inputsAgregarPersonalPart2.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarPersonal);
		input.addEventListener('blur', validarFormAgregarPersonal);
		input.addEventListener('click', validarFormAgregarPersonal);
	});
}

function activarInputsAgregarPersonalPart3() {
	inputsAgregarPersonalPart3.forEach((input) => {
		input.addEventListener('keyup', validarFormAgregarPersonal);
		input.addEventListener('blur', validarFormAgregarPersonal);
	});
}

// VALIDAR CHANGE (SELECT, DATE)
var validarSeleccionAgregarPersonal = (input, campo, div) => {
	if (input.value == 0 || input.value == "") {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		if (div != '') {
			seleccionarDivAgregarPersonal(div);
		} else {
			seleccionarAgregarPersonal(campo);
		}
		camposAgregarPersonal[campo] = false;
	} else {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposAgregarPersonal[campo] = true;
	}
}

var seleccionarAgregarPersonal = (campo) => {
	$(document).ready(function(){
		$(`#${campo}`).change(function() {

			switch (campo) {

				case 'fechaNacimientoPersonal':
					validarFechaNacimientoPersonal();
				break;

				case 'fechaIngresoPersonal':
					validarFechaIngresoPersonal();
				break;

			}

		});
	});
}

var seleccionarDivAgregarPersonal = (div) => {
	$(document).ready(function(){
		$(`#${div}`).change(function() {

			switch (div) {

				case 'cargarFuncionPersonal':
					validarFuncionPersonal();
				break;

			}

		});
	});
}

// EVENTOS DEL FORMULARIO DE REGISTRO DE PERSONAL
$(document).ready(function(){

	//BARRA DE ESTADO DEL FORMULARIO DE PERSONAL
	var step1 = document.getElementById('step1');
	var step2 = document.getElementById('step2');
	var step3 = document.getElementById('step3');
	var step4 = document.getElementById('step4');
	var step5 = document.getElementById('step5');

	//PARTES DEL FORMULARIO PARA AGREGAR PERSONAL
	var aggPersonalPart1 = document.getElementById('aggPersonalPart1');
	var aggPersonalPart2 = document.getElementById('aggPersonalPart2');
	var aggPersonalPart3 = document.getElementById('aggPersonalPart3');
	var aggPersonalPart4 = document.getElementById('aggPersonalPart4');
	var aggPersonalPart5 = document.getElementById('aggPersonalPart5');

	$('#btnGoAggPersonalPart2').click(function(){

		validarTipoPersonal();
		validarCodigoPersonal();

		activarInputsAgregarPersonalPart1();

		if (camposAgregarPersonal.tipoPersonal && camposAgregarPersonal.codigoPersonal) {
			
			step1.className = document.getElementById("step1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step2.className += " active";
			aggPersonalPart1.style.display = 'none';
			aggPersonalPart2.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}
		
	});

	$('#btnBackAggPersonalPart1').click(function(){
		step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step1.className += " active";
		aggPersonalPart1.style.display = 'block';
		aggPersonalPart2.style.display = 'none';
	});

	$('#btnGoAggPersonalPart3').click(function(){

		validarNombreCompletoPersonal();
		validarCedulaPersonal();
		validarFechaNacimientoPersonal();
		validarSexoPersonal();
		validarNivelInstrucionPersonal();
		validarEgresadoPersonal();
		validarDireccionPersonal();
		validarTelefonoPersonal();
		validarTelefono2Personal();
		validarTelefonoOpcionalPersonal();
		validarCorreoPersonal();
		validarCuentaNominaPersonal();

		activarInputsAgregarPersonalPart2();

		if (camposAgregarPersonal.nombreCompletoPersonal && camposAgregarPersonal.cedulaPersonal && camposAgregarPersonal.fechaNacimientoPersonal && camposAgregarPersonal.sexoPersonal && camposAgregarPersonal.nivelInstrucionPersonal && camposAgregarPersonal.egresadoPersonal && camposAgregarPersonal.direccionPersonal && camposAgregarPersonal.telefonoPersonal && camposAgregarPersonal.telefono2Personal && camposAgregarPersonal.telefonoOpcionalPersonal && camposAgregarPersonal.correoPersonal && camposAgregarPersonal.cuentaNominaPersonal) {
			
			step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step3.className += " active";
			aggPersonalPart2.style.display = 'none';
			aggPersonalPart3.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

	$('#btnBackAggPersonalPart2').click(function(){
		step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step2.className += " active";
		aggPersonalPart2.style.display = 'block';
		aggPersonalPart3.style.display = 'none';
	});

	$('#btnGoAggPersonalPart4').click(function(){

		validarFuncionPersonal();
		validarFechaIngresoPersonal();
		validarCodigoVoucherPersonal();
		validarCargoVoucherPersonal();
		validarAdscritoPersonal();

		activarInputsAgregarPersonalPart3();

		if (camposAgregarPersonal.funcionPersonal && camposAgregarPersonal.fechaIngresoPersonal && camposAgregarPersonal.codigoVoucherPersonal && camposAgregarPersonal.cargoVoucherPersonal && camposAgregarPersonal.adscritoPersonal) {
			
			step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
			step4.className += " active";
			aggPersonalPart3.style.display = 'none';
			aggPersonalPart4.style.display = 'block';

			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

	$('#btnBackAggPersonalPart3').click(function(){
		step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step3.className += " active";
		aggPersonalPart3.style.display = 'block';
		aggPersonalPart4.style.display = 'none';
	});

	$('#btnGoAggPersonalPart5').click(function(){
		step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step5.className += " active";
		aggPersonalPart4.style.display = 'none';
		aggPersonalPart5.style.display = 'block';
	});

	$('#btnBackAggPersonalPart4').click(function(){
		step5.className = document.getElementById("step5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
		step4.className += " active";
		aggPersonalPart4.style.display = 'block';
		aggPersonalPart5.style.display = 'none';
	});

});