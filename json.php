<?php

	header('Content-type:application/json');

	mysql_connect('localhost', 'root', '') or die( mysql_error());
	
	
	mysql_select_db('company')  or die( mysql_error());

	$select = mysql_query("SELECT * FROM `employee`");
 
	$rows=array();

	while($row=mysql_fetch_array($select)) 
	{
		$rows[] = $row;
	}
	
	echo json_encode($rows);
 ?>
