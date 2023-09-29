<?php 

	require_once "header.php";
	require_once "menu.php";

?>

<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	<div id="responsive" class="container spaceDown">
		<h1 class="display-4">Contactanos</h1>
		<h5>Si ya leiste el manual de usuario y tienes problemas con el sotfware contacta a los desarrolladores.</h5>
		<hr style="background-color: black">
		<div class="tab" style="display: flex; flex-direction: column; align-items: center;">
            <span class="tablinks" onclick="openStudent(event, 'Emilio')">
				<div class="col-sm-6">
					<img src="../img/emilio.JPG" alt="Emilio miniatura" width="180px" class="miniatura">
				</div>
            </span>
			<span class="tablinks" onclick="openStudent(event, 'Erickson')">
				<div class="col-sm-6">
					<img src="../img/erickson.jpg" alt="Erickson miniatura" width="180px" class="miniatura">
				</div>
            </span>
			<span class="tablinks" onclick="openStudent(event, 'Ronal')">
				<div class="col-sm-6">
					<img src="../img/ronal.jpg" alt="Ronal miniatura" width="180px" class="miniatura">
				</div>
            </span>
		</div>
        <div id="Emilio" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
			<div class="innercontainer">
				<img src="../img/emilio.JPG" class="desimg" alt="Emilio" height="500px">
				<div class="desdescription">
					<h5>Emilio Cabezas C.I: 28.078.563</h5>
					<hr>
					<p>Número de Teléfono y WhatsApp:</p>
					<p>0424-7000629</p>
					<hr>
					<p>Correo Electrónico:</p>
					<p>emiliodavidcc@gmail.com</p>
					<hr>
					<p>Facebook:</p>
					<p>www.facebook.com/emilio</p>
					<hr>
					<p>Dirección de Habitación:</p>
					<div class="popup" onclick="myPopup1()">
						<p>Parroquia El Carmen, Primera Sabana, Sector Banco Obrero, Urbanización San Benito, Calle Las Urreolas. Boconó estado Trujillo.</p>
						<span class="popuptext" id="myPopup1">
							<img src="../img/san_benito.png" class="desimg" alt="Ubicación de la Calle San Benito" width="460px">
						</span>
					</div>
				</div>
			</div>
        </div>

        <div id="Erickson" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
			<div class="innercontainer">
				<img src="../img/erickson.jpg" class="desimg" alt="Erickson" height="500px">
				<div class="desdescription">
					<h5>Erickson Graterol C.I: 28.078.150</h5>
					<hr>
					<p>Número de Teléfono y WhatsApp:</p>
					<p>0424-7212439</p>
					<hr>
					<p>Correo Electrónico:</p>
					<p>erickson17graterol@gmail.com</p>
					<hr>
					<p>Facebook:</p>
					<p>www.facebook.com/erickson</p>
					<hr>
					<p>Dirección de Habitación:</p>
					<div class="popup" onclick="myPopup2()">
						<p>Parroquia El Carmen, Segunda Sabana, Sector Valle Verde I, Calle Jumangal III. Boconó estado Trujillo.</p>
						<span class="popuptext" id="myPopup2">
							<img src="../img/valle_verde.png" class="desimg" alt="Ubicación de Valle Verde" width="460px">
						</span>
					</div>
				</div>
			</div>
        </div>

        <div id="Ronal" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
			<div class="innercontainer">
				<img src="../img/ronal.jpg" class="desimg" alt="Ronal" height="500px">
				<div class="desdescription">
					<h5>Ronal Garcia C.I: 27.776.438</h5>
					<hr>
					<p>Número de Teléfono y WhatsApp:</p>
					<p>0412-4395802</p>
					<hr>
					<p>Correo Electrónico:</p>
					<p>ronaljgd1@gmail.com</p>
					<hr>
					<p>Facebook:</p>
					<p>www.facebook.com/ronal</p>
					<hr>
					<p>Dirección de Habitación:</p>
					<div class="popup" onclick="myPopup3()">
						<p>Parroquia El Carmen, Segunda Sabana, Sector Bisnaca parte alta, Calle Número 4. Boconó estado Trujillo.</p>
						<span class="popuptext" id="myPopup3">
							<img src="../img/bisnaca.png" class="desimg" alt="Ubicación de Bisnaca" width="460px">
						</span>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

<?php 

	include_once "regiones/modalAgregarEstado.php";
	require_once "footer.php";
	require_once "buttonsDataTables.php";

?>

<script src="../js/soporte.js"></script>

	