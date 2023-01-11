<?php

require 'dbconnect.php';

$id =1;

$task_name = "Wash the Dishes";
$task_description ="Wash the Dishes Every After Meal";
$task_status = True;

$sql = "UPDATE tasks SET task_name = '{$task_name}', task_description = '{$task_description}', task_status = '{$task_status}' WHERE id = '{$id}'";



if ($conn->query($sql)) {
    echo "Task has been updated!";
} else {
    echo "Error Updating Task.";
}
?>







