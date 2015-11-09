<?php	

  
$data = json_decode(file_get_contents('php://input'));
$dIndex = mysql_real_escape_string($data->dIndex);

echo '<script language="javascript">';
echo 'alert("'.$dIndex.'")';
echo '</script>';


mysql_connect('localhost','root','') or die(mysql_error());
echo "connected ";

mysql_select_db('company') or die(mysql_error());
echo "data found ";

mysql_query("DELETE FROM employee(`id`) VALUES('".$dIndex."')") or die(mysql_error()); 

echo "data added";

mysql_close();

?>