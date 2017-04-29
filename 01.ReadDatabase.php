<!-- fileName: 01.ReadDatabase.php -->
<?php

include "function-library.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Url 01.ReadDatabase.php?lastname=J&age=32&salary=40000

$lname = getOption("lastname","");
$age = getOption("age",0);
$salary = getOption("salary",0);

/*
	Project the salary field
	add salary as a paramter
	Example, the following paramter will
		display data greater or equal to 40000
		
		&salary=40000
		
	
*/

if ($lname == ""){
	$where = "1 = 1";
}
else
{
	$where = "lastname like '$lname%'";
}

$where = $where . " AND age >= $age  ";
$where = $where . " AND salary >= $salary  ";


$sql = "SELECT ID, firstname, 
		age, lastname, salary 
		FROM employees
		where $where
		Order by lastname";

echo $sql;
		
$result = $conn->query($sql);
echo "<hr />";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"] 
		            . " - Name: " 
					. $row["firstname"]
					. " " 
					. $row["lastname"]
					. " " 
					. $row["age"]
					. " " 
					. $row["salary"]
					. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
