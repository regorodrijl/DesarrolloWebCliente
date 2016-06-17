<?php
if (!empty($_GET['nombrepais']))
{
	require("conexion.php");
	$stmt=$pdo->prepare("select * from paises2 where nombrepais=:elpais");
	$stmt->bindParam(':elpais',$_GET['nombrepais']);

	$stmt->execute();

	if ($stmt->rowCount()!=0)
	{
		echo json_encode($stmt->fetch());
		/*
		echo "<br/>Informacion obtenida de la base de datos: ";
		echo "<br/>Nombre: ".$fila['nombrepais'];
		echo "<br/>Region: ".$fila['region'];
		echo "<br/>Area: ".$fila['area'];
		echo "<br/>Poblacion: ".$fila['poblacion'];
		echo "<br/>GDP: ".$fila['gdp'];
		 */
	}
	else
		echo "Error";
}else {echo "Datos";}
?>