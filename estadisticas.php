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

    <style type="text/css">
			body {
			padding-top: 20px;
			}
			div {
			margin-bottom: 150px;
			margin-left: 150px;
			margin-right: 150px;
			}
			.jumbotron{
			text-align: center;
			}
			button{
			margin: 5px;
			}
			table {
				font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    			font-size: 12px;
    			width: 480px; 
    			text-align: center;    
    			border-collapse: collapse;
    			margin-bottom: 150px;
				margin-left: 150px;
				margin-right: 150px;
    			}

			th {
				font-size: 13px;     
				font-weight: normal;     
				padding: 8px;     
				background: #b9c9fe;
			    border-top: 4px solid #aabcfe;    
			    border-bottom: 1px solid #fff; 
			    color: #039;
			    }

			td {
				padding: 8px;     
				background: #e8edff;     
				border-bottom: 1px solid #fff;
			    color: #669;    
			    border-top: 1px solid transparent;
			    }

			
		</style>
</head>
<body>
<div class="container">
<div class="jumbotron">
	<h1>Estadisticas</h1>
</div>
<div>
	<?php

		$mysqli = new mysqli('mysql.hostinger.es','u773293184_sergi','sergio','u773293184_user',3306);

		$query = "SELECT destino, COUNT(*) AS visitas, (COUNT(*)*100)/(SELECT COUNT(*) FROM visitas) AS porcentaje FROM visitas GROUP BY origen,destino";

		$numv = $mysqli->query($query);

		echo "<table border=1 ><tr><td>Origen</td><td>Visitas</td><td>Porcentaje</td></tr>";

		while( $row = $numv->fetch_array(MYSQL_BOTH)){
			echo "<tr><td>".$row["destino"]."</td><td>".$row["visitas"]."</td><td>".$row["porcentaje"]."</td></tr>";
		}
		echo "</table>";

	?>
</div>
</div>

</body>
</html>