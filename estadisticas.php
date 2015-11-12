<!DOCTYPE html>
<html>
<head>
	<title>Estadisticas</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="Styles/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/bootstrap.min.js"></script>

    
</head>
<body>
<div class="container">
<div class="jumbotron">
	<h1>Estadisticas</h1>
</div>
<table class="table"><tr><td>Origen</td><td>Visitas</td><td>Porcentaje</td></tr>

	<?php

		$mysqli = new mysqli('mysql.hostinger.es','u773293184_sergi','sergio','u773293184_user',3306);

		$query = "SELECT destino, COUNT(*) AS visitas, (COUNT(*)*100)/(SELECT COUNT(*) FROM visitas) AS porcentaje FROM visitas GROUP BY origen,destino";

		$numv = $mysqli->query($query);

	

		while( $row = $numv->fetch_array(MYSQL_BOTH)){
			echo "<tr><td>".$row["destino"]."</td><td>".$row["visitas"]."</td><td>".$row["porcentaje"]."</td></tr>";
		}
		echo "</table>";

	?>

</div>

</body>
</html>