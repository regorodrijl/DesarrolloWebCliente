<?php

// Devolverá los paises en este formato:
// <li>Spain</li>
// <li>France</li>

if (!empty($_GET['nombrepais']))
{
	require("conexion.php");

	$stmt=$pdo->prepare("select nombrepais from paises2 where nombrepais like :busqueda");
	$stmt->bindValue(':busqueda',$_GET['nombrepais'].'%');
	$stmt->execute();

	while ($fila = $stmt->fetch())
		echo "<li>" . $fila['nombrepais'] . "</li>\n";
}else {echo "sug";}
?>