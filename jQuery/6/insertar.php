<?php
require_once 'conexion.php';

if (!empty($_POST['pais']))
{
	try{	
		$stmt = $pdo->prepare("insert into paises(nombrepais) values(:nombrepais)");
# Ejecutamos la consulta con ->execute() método del objeto PDOStatement
		$stmt->bindParam(':nombrepais', $_POST['pais']);
		
# Este método devuelve true o false.
		$stmt->execute();

		echo "ok";
	}
	catch(PDOException $e) {
		echo "error";
		//echo $e->getMessage();
	}
}
?>