<?php

	try{
		$dsn = "mysql:host=localhost;dbname=noticias_servidor";
		$user = "root";
		$password = "";
		$dbh = new PDO($dsn, $user, $password);
		$dbh->setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->exec('SET NAMES "utf-8"');
	} catch (PDOException $e){
		echo "Error en la conexion:" . $e ->getMessage();
	}

	echo "Fuciona";

	// $sql = "SELECT * FROM gnr_post ORDER BY post_date DESC";

	// $stmt = $dbh->prepare($sql);

	// $stmt->execute();

	// $noticias = $stmt->fetchAll(PDO::FETCH_OBJ);

	// print_r($noticias);
