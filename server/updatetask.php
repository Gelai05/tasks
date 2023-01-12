<?php

require 'dbconnect.php';

$id =1;

$task_name = $_POST["name"];
$task_description = $_POST["description"];
$task_status = $_POST["status"];

$sql = "UPDATE tasks SET task_name = '{$task_name}', task_description = '{$task_description}', task_status = '{$task_status}' WHERE id = '{$id}'";



if ($conn->query($sql)) {
    echo "Task has been updated!";
} else {
    echo "Error Updating Task.";
}
?>







