<?php

require 'dbconnect.php';

$id =1;

$sql="DELETE FROM tasks WHERE id = {$id}";

if ($conn->query($sql)) {
    echo "Task has been deleted!";
} else {
    echo "Error deleting Task.";
}

?>