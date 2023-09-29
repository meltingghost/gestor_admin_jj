<?php 

	$parentescoREI1 = (isset($_POST['parentescoREI1'])) ? $_POST['parentescoREI1'] : "";

	$cadena = '<select name="parentescoREI2" id="parentescoREI2" class="form-control form-select formV-input">';

	if ($parentescoREI1 == "Madre") {

		$cadena = $cadena . '<option disabled="" value="Madre">Madre</option>';
		$cadena = $cadena . '<option value="Padre">Padre</option>';
		$cadena = $cadena . '<option selected="" value="Representante">Representante</option>';

	} else if ($parentescoREI1 == "Padre") {
		
		$cadena = $cadena . '<option value="Madre">Madre</option>';
		$cadena = $cadena . '<option disabled="" value="Padre">Padre</option>';
		$cadena = $cadena . '<option selected="" value="Representante">Representante</option>';

	} else if ($parentescoREI1 == "Representante") {
		
		$cadena = $cadena . '<option selected="" value="Madre">Madre</option>';
		$cadena = $cadena . '<option value="Padre">Padre</option>';
		$cadena = $cadena . '<option  disabled="" value="Representante">Representante</option>';

	} else {
		$cadena = $cadena . '<option selected="" disabled="" value="">Seleccione el parentesco</option>';
	}

	$cadena = $cadena . '</select>';

    print(json_encode($cadena));

	

?>