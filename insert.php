<?php	

$data = json_decode(file_get_contents('php://input'));
$empno = mysql_real_escape_string($data->empno);
$fname = mysql_real_escape_string($data->fname);
$lname = mysql_real_escape_string($data->lname);
$dept = mysql_real_escape_string($data->dept);

mysql_connect('localhost','root','') or die(mysql_error());
echo "connected ";

mysql_select_db('company') or die(mysql_error());
echo "data found ";
mysql_query("INSERT INTO employee(`emp_no`, `first_name`, `last_name`, `dept_name`) VALUES('".$empno."','".$fname."','".$lname."','".$dept."')") or die(mysql_error());
// mysql_query("INSERT INTO employee(`emp_no`, `first_name`, `last_name`, `dept_name`) VALUES('1','sddf','las','dd')") or die(mysql_error());

echo "data added";

mysql_close();

?>