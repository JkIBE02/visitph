<?php
include 'db_connect.php'; // Include database connection

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $name = $_POST['destination_name'];
    $image_filename = $_POST['image_filename'];

    // Convert name to file format (same logic as upload)
    $filename = strtolower(str_replace(' ', '_', $name)) . ".php";
    $file_path = "./destinations/" . $filename;
    $image_path = "./assets/images/" . $image_filename;

    // Delete the record from the database
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        // Delete the generated PHP file
        // if (file_exists($file_path)) {
        //     unlink($file_path); // Deletes the PHP file
        // }
        // // Delete the uploaded image
        // if (file_exists($image_path)) {
        //     unlink($image_path); // Deletes the image
        // }

        echo "Record id " . $id . " with name of " . $name . " is deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
<h2><a href="1_DestinationIndex.php">Go Back</a></h2>
