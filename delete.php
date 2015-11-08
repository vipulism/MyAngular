<?php	

$data = json_decode(file_get_contents('php://input'));
$deleteThis =  mysqli_escape_string($data->dIndex);

$conn = new mysqli('localhost','root','', 'company');
//$conn = mysql_connect('localhost','root','');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// mysql_select_db('company') or die(mysql_error());
// echo "data found ";


// sql to delete a record
$sql = "DELETE FROM employee WHERE id=45";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


//mysql_query("INSERT INTO employee(`emp_no`) VALUES('".$empno."','".$fname."','".$lname."','".$dept."')") or die(mysql_error());
// mysql_query("INSERT INTO employee(`emp_no`, `first_name`, `last_name`, `dept_name`) VALUES('1','sddf','las','dd')") or die(mysql_error());


$conn->close();

?>