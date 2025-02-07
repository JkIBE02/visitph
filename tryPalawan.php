<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$image = "http://localhost/GROUP9/assets/images/palawan.jpg"; 
$description = "Palawan is known for its beautiful beaches and stunning landscapes.";
$author = "Admin";

if (isset($_POST['share'])) {
    $stmt = $conn->prepare("INSERT INTO blog_posts (author, content, image, likes) VALUES (?, ?, ?, 0)");
    $stmt->bind_param("sss", $author, $description, $image);
    $stmt->execute();
    $stmt->close();
    header("Location: blog.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Palawan</title>
</head>
<body>
    <img src="<?php echo $image; ?>" width="300">
    <p><?php echo $description; ?></p>
    <form method="post">
        <button type="submit" name="share">Share</button>
    </form>
</body>
</html>