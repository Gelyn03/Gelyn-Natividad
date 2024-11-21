<!DOCTYPE html>
<html>
<head>
  <title>Add Task</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Add Task</h1></div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$task_name = $_POST["task_name"];
$task_description = $_POST["task_description"];

$sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$task_name', '$task_description')";

if ($conn->query($sql) === TRUE) {
    echo "Task added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
</body>
</html>
