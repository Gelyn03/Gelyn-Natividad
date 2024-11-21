
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>To-Do List</h1>
    <form action="add_task.php" method="post">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["task_name"] . ": " . $row["task_description"] . "</p>";
    }
} else {
    echo "No tasks found.";
}

$conn->close();
?>
</div>
</body>
</html>

