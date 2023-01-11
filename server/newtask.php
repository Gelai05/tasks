<?php
require 'dbconnect.php';

$task_name = $_POST["name"];
$task_description = $_POST["description"];
$task_status = $_POST["status"];

$sql = "INSERT INTO tasks (task_name, task_description, task_status) VALUES ('{$task_name}','{$task_description}','{$task_status}')";

if ($conn->query($sql)) {
    echo "New Task Created";
} else {
    echo "Error adding Tasks.";
}

?>