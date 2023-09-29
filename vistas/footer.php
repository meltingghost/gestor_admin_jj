
	<script src="../librerias/bootstrap5/bootstrap.bundle.min.js"></script>
	<script src="../librerias/dataTables/datatables.min.js"></script>
	<script src="../librerias/jquery/jquery-ui-1.13.2.blue.light/jquery-ui.min.js"></script>
	<script src="../librerias/sweetalert2/sweetalert2.all.min.js"></script>
	<script src="../librerias/alertify/alertify.min.js"></script>
	<script src="../librerias/clockpicker/clockpicker.min.js"></script>
	<script src="../librerias/fullCalendar/index.global.min.js"></script>
	<script src="../js/validaciones.js"></script>
	<script src="../js/temas.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			// check if the user has set dark mode before
			var darkMode = Cookies.get("dark-mode");
			if (darkMode === "on") {
			setDarkMode(true);
			} else if (darkMode === "off") {
			setDarkMode(false);
			}

			function setDarkMode(enabled) {
				if (enabled) {
					$("body").addClass("dark-mode");
					Cookies.set("dark-mode", "on", { expires: 365 });
				} else {
					$("body").removeClass("dark-mode");
				//	Cookies.set("dark-mode", "off", { expires: 365 });
				}

				// Call setDarkMode here too
				if (enabled) {
					$("body").addClass("dark-mode");
				} else {
					$("body").removeClass("dark-mode");
				}
			}
		});
	</script>

	<script type="text/javascript">
		
		function logout() {

			Swal.fire({
				title: '¿Salir?',
				text: "¿Esta seguro de que desea finalizar la sesión?.",
				icon: 'question',
				allowOutsideClick: false,
				allowEscapeKey: false,
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#3085d6',
				confirmButtonText: 'Si, Salir',
				cancelButtonText: 'No, Continuar'
			}).then((result) => {
				if (result.isConfirmed) {

					window.location.href = "../logout.php";

				}
			});

		}

	</script>

</body>
</html>