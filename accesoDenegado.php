<?php 

	require_once "header.php";

 ?>

 <body>

 <?php

	include 'login.php';
	require_once "footer.php";

 ?>

	<script type="text/javascript">
		Swal.fire({
			position: 'bottom-end',
			icon: 'error',
			title: 'Acesso Denagado!',
			text: 'Debes iniciar sesion para poder acceder.',
			toast: true,
			showConfirmButton: false,
			timer: 6000
		});
	</script>