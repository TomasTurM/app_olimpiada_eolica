<?php
	# Ejecuccion del request.py
	$exec_py = escapeshellcmd('./request.py');
	$output = shell_exec($exec_py);
	$jsonArray = json_decode($output, true);
  	print_r($jsonArray);

  	/*
	# Datos del POST
	$dato_id = $_POST['dato_id'];
	$i = $_POST['i'];
	$w_d = $_POST['w_d'];
	$w_s = $_POST['w_s'];
	$v = $_POST['v'];
	*/

	# Coneccion con DB
	$con = mysqli_connect('localhost','admin','pepe1234');
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
	}

	# Creacion de la database
	$command = "mysql --user=root --password=pepe1234 " . "< ./db_eolica.sql"
	mysqli_query($con,$command)

	# Seleccion de DB
	mysqli_select_db($con,'db_eolica');

	# Guardar en DB
  	# Loop through Array
  	foreach ($jsonArray as $key => $value) {
    	# echo $value["name"] . ", " . $value["gender"] . "<br>";
  		$sql = "INSERT INTO datos_eolica (dato_id, i, w_d, w_s, v)
		VALUES ($value["dato_id"], $value["i"], $value["w_d"],
		$value["w_s"], $value["v"])"
  	}

  	/*
	$sql = "INSERT INTO datos_eolica (dato_id, i, w_d, w_s, v)
	VALUES ($dato_id, $i, $w_d, $w_s, $v)"
	
	if (mysqli_query($con, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	*/

	mysqli_close($con);
?>