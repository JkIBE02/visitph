<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];

    $result = $conn->query("SELECT likes FROM blog_posts WHERE id = $post_id");
    $post = $result->fetch_assoc();

    if (isset($_SESSION["liked_$post_id"])) {
        $new_likes = $post['likes'] - 1;
        unset($_SESSION["liked_$post_id"]);
        $liked = false;
    } else {
        $new_likes = $post['likes'] + 1;
        $_SESSION["liked_$post_id"] = true;
        $liked = true;
    }

    $conn->query("UPDATE blog_posts SET likes = $new_likes WHERE id = $post_id");

    echo json_encode(["likes" => $new_likes, "liked" => $liked]);
}
?>
