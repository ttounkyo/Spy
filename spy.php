<?php
// un comentario
if($_REQUEST){
	# host | user | password | database | port
	$mysqli = new mysqli('mysql.hostinger.es','u773293184_sergi','sergio','u773293184_user',3306);

	if(!$mysqli) {
		die ("<h3>Error Conecting to MysQl</h3>"); 
		}
	$origen = $_REQUEST['origen'];
	$destino = $_REQUEST['destino'];
	echo $origen."<br>".$destino;
	$query = "INSERT INTO visitas(destino,origen) VALUES ('$destino','$origen')";

	$result= $mysqli->query($query);

	header("location: $destino ");
}
?>