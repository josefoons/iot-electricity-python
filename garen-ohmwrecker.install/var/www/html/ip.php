<?php
$field1 = $_POST["ip"];
$field2 = $_POST["time"];

$output = shell_exec("garen-ohmwrecker-conf --setip $field1 --setinterval $field2");

echo "<pre>$output</pre>";
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="style/style.css" rel="stylesheet" charset=UTF-8>
		<title>ConfigWeb - TTU</title>
		<link rel="shortcut icon" href="/img/icon.ico" />
		<script>
			function valida(e){
			tecla = (document.all) ? e.keyCode : e.which;

			//Tecla de retroceso para borrar, siempre la permite
			if (tecla==8){
				return true;
			}
        
			// Patron de entrada, en este caso solo acepta numeros
			patron =/[0-9]/;
			tecla_final = String.fromCharCode(tecla);
			return patron.test(tecla_final);
}
</script>

	</head>

	<body>
	<!-- Esto es el menu -->
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="ip.php">IP</a></li>
			<li><a href="datos.php">Data</a></li>
			<li><a href="https://github.com/josefoons/iot-electricity-python/blob/master/Downloads/Instructions.txt">TUTORIAL</a></li>
		</ul>
		
	<!-- Esto es el contenido de la web -->
		<div class="testbox">
			<h1>Set IP</h1>
			<form action="" method="post">
				<hr>
				<h5 id="hola">Please, put both of them together.</h5>
				<h5 id="hola">Use the correct IP format (XXX.XXX.XXX.XXX), on the contrary, does not accept it.</h5>
				<label id="text" for="name"><b>IP</a></label>
				<input type="text" name="ip" type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$"  id="name" placeholder="Ej: 192.168.242.106"><br>
				<br />
				<h5 id="hola">Please, numbers of seconds (Example: 60).</h5>
				<label id="text" for="name"><b>TIME</a></label>
				<input type="text" name="time" type="text" id="time" onkeypress="return valida(event)" placeholder="Ej: 10secs"><br>
				<input type="submit" value="Submit" class="button" >
			</form>
		</div>

	<!-- Esto es el copy -->
		<div class="copy">
			<a>©Created only for Tallinn University of Technology (TUT)</a>
		</div>

	</body>
</html>

