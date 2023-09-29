<?php 

	session_start();
	unset($_SESSION['id_usuario']);
	unset($_SESSION['usuario']);
	unset($_SESSION['nombre']);
	unset($_SESSION['apellido']);
	unset($_SESSION['id_cargo']);
	unset($_SESSION['cargo']);
	session_destroy();

	require_once "header.php";
	include "inicio.php";

 ?>

<body>

<?php 

	require_once "footer.php";

?>

<script type="text/javascript">
	Swal.fire({
		position: 'top-end',
		title: 'Sesión Finalizada!',
		text: 'Gracias por usar el gestor administrativo.',
		footer: '<p><b>Desarrollado por los Estudiantes del PNF en Informática.</b><br> Emilio Cabezas<br> Erickson Graterol<br> Ronal Garcia</p>',
		toast: true,
		showConfirmButton: false,
		timer: 8000
	});
</script>