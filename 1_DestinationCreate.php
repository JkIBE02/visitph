<?php 
include 'db_connect.php'; // Include your database connection file

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $category_type = $_POST['category_type'];

    // Handle Image Upload
    $image = $_FILES['image']['name'];
    $target_dir = "assets/images/";
    $target_file = $target_dir . basename($image);

    // Ensure image filename is unique to avoid overwriting
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $newFilename = pathinfo($image, PATHINFO_FILENAME) . "_" . time() . "." . $imageFileType;
    $newFilePath = $target_dir . $newFilename;

    // Only move if the file doesn't exist already
    if (!file_exists($target_file)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $newFilePath);
    } else {
        // If file exists, use existing file instead of uploading a duplicate
        $newFilename = $image;
    }
    // Save to Database
    $sql = "INSERT INTO products (title, description, name, image_filename, category_type) 
            VALUES ('$title', '$description', '$name', '$newFilename', '$category_type')";
            
    if ($conn->query($sql) === TRUE) {
        echo $title . " destination is added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<h2><a href="1_DestinationIndex.php">Go Back</a></h2>
