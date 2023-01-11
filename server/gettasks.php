<?php
require 'dbconnect.php';

$query = "SELECT * FROM tasks;";

$result = $conn->query($query);

$tasks = [];
if($result->num_rows > 0) {

	while($task = $result->fetch_assoc()) {
		array_push($tasks, $task);
	}
	echo json_encode($tasks);
}
else {
	echo "Query returned 0 rows.";
}


$conn->close();

?>








?>