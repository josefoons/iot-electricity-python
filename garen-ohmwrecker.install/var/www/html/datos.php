<?php
	require('exec/conexion.php');
	$query="SELECT *  FROM umg511_tbl"; 
	$resultado=$mysqli->query($query);
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
		<link href="style/style.css" rel="stylesheet" charset=UTF-8>
		<title>ConfigWeb - TTU</title>
		<link rel="shortcut icon" href="/img/icon.ico" />
	</head>
    <body>
	
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="ip.php">IP</a></li>
			<li><a href="datos.php">Data</a></li>
			<li><a href="https://github.com/josefoons/iot-electricity-python/blob/master/Downloads/Instructions.txt">TUTORIAL</a></li>
		</ul>
	 	 <div class="datos">
		 <h1>DOWNLOAD</h1>
		 <hr>
		  <form action="exec/export-garen.php" method="POST" id="enviar">
			<center><input type="submit" value="Download" class="btn" /></center>
		  </form>

	 </div>

	 <div class="copy">
		<a>©Created only for Tallinn University of Technology (TUT)</a>
	 </div>
 </body>
</html>
