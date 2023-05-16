<?php 

	require_once "header.php";

?>

<body>

	<link rel="stylesheet" href="css/ruleta.css">

	<div id="mainbox" class="mainbox">
		<div id="box" class="box">
			<div class="box1">
				<span class="span1"><b>10</b></span>
				<span class="span2"><b>20</b></span>
				<span class="span3"><b>50</b></span>
				<span class="span4"><b>100</b></span>
			</div>
			<div class="box2">
				<span class="span1"><b>150</b></span>
				<span class="span2"><b>200</b></span>
				<span class="span3"><b>400</b></span>
				<span class="span4"><b>500</b></span>
			</div>
		</div>
		<button class="spin" onclick="myfunction()">SPIN</button>
	</div>

	<div class="row">
		<div class="col">
			<a href="inicio.php" class="btn btn-secondary">Vovler</a>
		</div>
	</div>

<?php 

	require_once "footer.php";

?>

<script type="text/javascript">
	function myfunction() {
	var x = 1024;
	var y = 9999;
	var deg = Math.floor(Math.random() * (x - y)) + y; 
	document.getElementById('box').style.transform = "rotate("+deg+"deg)";

	var element = document.getElementById('mainbox');
	element.classList.remove('animate');
	setTimeout(function(){
		element.classList.add('animate');
		var valueList = ["10","20","50","100","150","200","400","500",];
		var getValue = valueList[Math.floor(Math.random() * valueList.length)];
		// alert(getValue); 
	}, 5000);
}
</script>