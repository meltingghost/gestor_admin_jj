<!-- FECHA -->
<?php 

    date_default_timezone_set('America/Caracas');

    $fechaActual = date('d-m-Y');

    $ayer = date('d');

    $ayer = $ayer - 1;

    if ($ayer < 1) {
        $ayer = 28;
        $mes = date('m');
        $mes = $mes - 1;
        $fechaAyer = date($ayer . '-' . $mes . '-Y');
    } else {
        $fechaAyer = date($ayer . '-m-Y');
    }

?>