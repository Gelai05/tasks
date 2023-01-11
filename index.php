<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container m-5 p-5">
        <div class="row">
            <div class="col-7">
                <h1><strong>Tasks</strong></h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'server/dbconnect.php';

                        $sql = "SELECT id, task_name, task_description, task_status FROM tasks";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($task = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>";
                                echo $task["id"];
                                echo "</td>";
                                echo "<td>";
                                echo $task["task_name"];
                                echo "</td>";
                                echo "<td>";
                                echo $task["task_description"];
                                echo "</td>";
                                echo "<td>";
                                echo $task["task_status"];
                                echo "</td>";
                                echo "</tr>";
                            }
                        }else{
                            echo "No task available.";
                        }
                    ?>
                        
                    </tbody>
                </table>
                <form method="POST" action="server/newtask.php">
                    <span><strong>Create Task</strong></span>
                    <hr>
                    <div class="mb-3">
                        <label for="taskname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="taskname" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="task_description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="task_description" name="description">
                    </div>
                    <div class="mb-3">
                    <label for="task_status" class="form-label">Status</label>
                    <select class="form-control" id="task_status" name="status">
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create New Task</button>
                </form>
                <hr>
                
            </div>
        </div>
    </div>
    
</body>
</html>