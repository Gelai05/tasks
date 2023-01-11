<?php

require 'dbconnect.php';

$id =1;

$task_name = $_GET["name"];
$task_description = $_GET["description"];
$task_status = $_GET["status"];

$sql = "UPDATE tasks SET task_name = '{$task_name}', task_description = '{$task_description}', task_status = '{$task_status}' WHERE id = '{$id}'";



if ($conn->query($sql)) {
    echo "Task has been updated!";
} else {
    echo "Error Updating Task.";
}
?>







