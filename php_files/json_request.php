<?php 

	$people = array(
		1 => array(
			'firstname' => 'Luke',
			'lastname' => 'Skywalker'
			),
		2 => array(
			'firstname' => 'Rene',
			'lastname' => 'Escobar'
			),
		3 => array(
			'firstname' => 'Pablo',
			'lastname' => 'Escobar'
			),
		4 => array(
			'firstname' => 'John',
			'lastname' => 'Doe'
			)
		);

		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($people);

 ?>