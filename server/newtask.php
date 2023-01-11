<?php
require 'dbconnect.php';

$sql = "INSERT INTO tasks (task_name, task_description, task_status) VALUES ('General Cleaning', 'Clean the Bedrooms', true)";

if ($conn->query($sql)) {
    echo "New Task Created";
} else {
    echo "Error adding Tasks.";
}

?>