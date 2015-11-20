<?php

	header('Content-type:application/json');


$db = new mysqli('localhost', 'root', '', 'company');

$result = $db->query("SELECT * FROM `employee`");

 
	$rows=array();

	while($row=mysqli_fetch_array($result)) 
	{
		$rows[] = $row;
	}
	
	echo json_encode($rows);
 ?>
