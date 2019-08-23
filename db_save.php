<?php
	# Datos del POST
	$i = $_POST['i'];
	$w_d = $_POST['w_d'];
	$w_s = $_POST['w_s'];
	$v = $_POST['v'];

	# Coneccion con DB
	$con = mysqli_connect('localhost','admin','pepe1234');
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con,'db_eolica');

	# Testeo en .txt
	$myFile = "db.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	fwrite($fh, $return);
	fclose($fh);

	# Guardar en DB
	if (file_exists('db.sql')) {
		$sql = "USE "
	} else {
		$sql = "CREATE DATABASE db_eolica";
		if (mysqli_query($con, $sql)) {
		    echo "Database created successfully";
		} else {
		    echo "Error creating database: " . mysqli_error($con);
		}
	}

	mysqli_close($con);
?>