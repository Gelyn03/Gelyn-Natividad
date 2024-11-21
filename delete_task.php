<!DOCTYPE html>
<html>
<head>
  <title>Delete Task</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Delete Task</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$task_id = $_GET["id"];

$sql = "DELETE FROM tasks WHERE id=$task_id";

if ($conn->query($sql) === TRUE) {
    echo "Task deleted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
</body>
</html>
