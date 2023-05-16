//BARRA DE ESTADO DE LOS FORMULARIOS
var step1 = document.getElementById('step1');
var step2 = document.getElementById('step2');
var step3 = document.getElementById('step3');
var step4 = document.getElementById('step4');
var step5 = document.getElementById('step5');

//BOTONES DE ATRAS Y ADELANTE DEL FORMULARIO PARA AGREGAR PERSONAL
var aggPersonalPart1 = document.getElementById('aggPersonalPart1');
var aggPersonalPart2 = document.getElementById('aggPersonalPart2');
var aggPersonalPart3 = document.getElementById('aggPersonalPart3');
var aggPersonalPart4 = document.getElementById('aggPersonalPart4');
var aggPersonalPart5 = document.getElementById('aggPersonalPart5');

var btnBackAggPersonalPart4 = document.getElementById('btnBackAggPersonalPart4');
var btnRegistrarPersonal = document.getElementById('btnRegistrarPersonal');

$('#btnGoAggPersonalPart2').click(function(){
	step1.className = document.getElementById("step1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step2.className += " active";
	aggPersonalPart1.style.display = 'none';
	aggPersonalPart2.style.display = 'block';
});

$('#btnBackAggPersonalPart1').click(function(){
	step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step1.className += " active";
	aggPersonalPart1.style.display = 'block';
	aggPersonalPart2.style.display = 'none';
});

$('#btnGoAggPersonalPart3').click(function(){
	step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step3.className += " active";
	aggPersonalPart2.style.display = 'none';
	aggPersonalPart3.style.display = 'block';
});

$('#btnBackAggPersonalPart2').click(function(){
	step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step2.className += " active";
	aggPersonalPart2.style.display = 'block';
	aggPersonalPart3.style.display = 'none';
});

$('#btnGoAggPersonalPart4').click(function(){
	step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step4.className += " active";
	aggPersonalPart3.style.display = 'none';
	aggPersonalPart4.style.display = 'block';
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
	btnBackAggPersonalPart4.style.display = 'block';
	btnRegistrarPersonal.style.display = 'block';
});

$('#btnBackAggPersonalPart4').click(function(){
	step5.className = document.getElementById("step5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step4.className += " active";
	aggPersonalPart4.style.display = 'block';
	aggPersonalPart5.style.display = 'none';
	btnBackAggPersonalPart4.style.display = 'none';
	btnRegistrarPersonal.style.display = 'none';
});

//BOTONES DE ATRAS Y ADELANTE DEL FORMULARIO PARA AGREGAR ESTUDIANTES DE EDUCACIÓN INICIAL
var aggEIPart1 = document.getElementById('aggEIPart1');
var aggEIPart2 = document.getElementById('aggEIPart2');
var aggEIPart3 = document.getElementById('aggEIPart3');
var aggEIPart4 = document.getElementById('aggEIPart4');
var aggEIPart5 = document.getElementById('aggEIPart5');

var btnBackAggEIPart4 = document.getElementById('btnBackAggEIPart4');
var btnRegistrarEI = document.getElementById('btnRegistrarEI');

$('#btnGoAggEIPart2').click(function(){
	step1.className = document.getElementById("step1").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step2.className += " active";
	aggEIPart1.style.display = 'none';
	aggEIPart2.style.display = 'block';
});

$('#btnBackAggEIPart1').click(function(){
	step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step1.className += " active";
	aggEIPart1.style.display = 'block';
	aggEIPart2.style.display = 'none';
});

$('#btnGoAggEIPart3').click(function(){
	step2.className = document.getElementById("step2").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step3.className += " active";
	aggEIPart2.style.display = 'none';
	aggEIPart3.style.display = 'block';
});

$('#btnBackAggEIPart2').click(function(){
	step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step2.className += " active";
	aggEIPart2.style.display = 'block';
	aggEIPart3.style.display = 'none';
});

$('#btnGoAggEIPart4').click(function(){
	step3.className = document.getElementById("step3").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step4.className += " active";
	aggEIPart3.style.display = 'none';
	aggEIPart4.style.display = 'block';
});

$('#btnBackAggEIPart3').click(function(){
	step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step3.className += " active";
	aggEIPart3.style.display = 'block';
	aggEIPart4.style.display = 'none';
});

$('#btnGoAggEIPart5').click(function(){
	step4.className = document.getElementById("step4").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step5.className += " active";
	aggEIPart4.style.display = 'none';
	aggEIPart5.style.display = 'block';
	btnBackAggEIPart4.style.display = 'block';
	btnRegistrarEI.style.display = 'block';
});

$('#btnBackAggEIPart4').click(function(){
	step5.className = document.getElementById("step5").className.replace( /(?:^|\s)active(?!\S)/g , '' );
	step4.className += " active";
	aggEIPart4.style.display = 'block';
	aggEIPart5.style.display = 'none';
	btnBackAggEIPart4.style.display = 'none';
	btnRegistrarEI.style.display = 'none';
});