// Colocar automaticamente la primera letra de los inputs en mayuscula
function mayus(textboxid, str) {
	// string with alteast one character
	if (str && str.length >= 1)
	{       
		var firstChar = str.charAt(0);
		var remainingStr = str.slice(1);
		str = firstChar.toUpperCase() + remainingStr;
	}
	document.getElementById(textboxid).value = str;
}



// No permitir espacios en blanco dentro de los inputs
$(".input-no-space").on({
  keydown: function(event) {
    if (event.which === 32)
        // aqui se podria colocar que va a pasar si presiona espacio
    return false;
},
    // if a space copied and pasted in the input field, replace it (remove it):
    change: function() {
      this.value = this.value.replace(/\s/g, "");
  }
});



// El usuario no se encuentra autorizado para realizar ninguna acción
function noAutorizado(){
    Swal.fire({
        title: 'No estás autorizado para realizar ninguna acción!',
        showCloseButton: true,
    });
}



// No hay acciones disponibles para algo
function noHayAcciones(){
    Swal.fire({
        title: 'No hay ninguna acción disponible!',
        showCloseButton: true,
    });
}



// INICIAR ANIMACIÓN CARGANDO RING
function iniciarAnimacion() {
    var animacion = document.getElementById('animacionRing');
    animacion.style.display = 'block';
}



// FINALIZAR ANIMACIÓN CARGANDO RING
window.onload = function() {
    $('#animacionRing').fadeOut(500);
}