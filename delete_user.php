<?php
session_start();
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM users WHERE id = $id";
    
    if ($conn->query($deleteQuery)) {
        header("Location: user_management.php");
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}
?>
