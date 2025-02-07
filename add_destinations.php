<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    $conn = new mysqli("localhost", "root", "", "tourism_website");
    $sql = "INSERT INTO destinations (name, description, image_url) VALUES ('$name', '$description', '$image_url')";
    if ($conn->query($sql) === TRUE) {
        echo "New destination added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="add_destinations.php">
    <label>Name:</label><input type="text" name="name" required>
    <label>Description:</label><textarea name="description" required></textarea>
    <label>Image URL:</label><input type="text" name="image_url" required>
    <button type="submit">Add Destination</button>
</form>
</body>
</html>

