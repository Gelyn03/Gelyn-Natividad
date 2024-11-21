<!DOCTYPE html>
<html>
<head>
  <title>Edit Task</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Edit Task</h1>
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
$task_name = $_POST["task_name"];
$task_description = $_POST["task_description"];

$sql = "UPDATE tasks SET task_name='$task_name', task_description='$task_description' WHERE id=$task_id";

if ($conn->query($sql) === TRUE) {
    echo "Task updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</div>
</body>
</html>
