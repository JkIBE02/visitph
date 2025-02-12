<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session to access session variables

// Check if the user is logged in
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .blog-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 16px;
        }

        .blog-header {
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .blog-header img {
            width: 40px;
            height: 40px;
            border-radius: 70%;
        }

        .blog-image {
            border-radius: 15px;
        }

        .blog-content img {
            width: 100%;
            height: auto;
            margin-top: 10px;
        }

        .blog-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }

       .blog-actions {
        display: flex;
       }

        .blog-actions button {
            background: none;
            border: none;
            font-size: 16px;
            color: #007BFF;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .blog-actions button:hover {
            background-color: #f0f8ff;
        }

        .delete-btn {
            background-color: hsla(0, 100%, 42%, 1);
            font-size: 17px;
            width: 70px;
            color: white;
            border: none;
            margin-top: 10px;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 10px;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .delete-btn:hover {
            background-color: hsla(0, 100%, 33%, 1);
         
        }

        .name {
            font-size: 23px;
            font-family: "Roboto", serif;
        }

        .date {
            font-size: 13px;
            font-family: "Roboto", serif;
        }

        .comment-input {
            border-radius: 15px;
            font-size: 15px;
            font-family: "Roboto", serif;
        }

        .comment-box {
            margin-bottom: 10px;
        }

        .post-comment {
            color: white;
            background-color: hsla(173, 100%, 38%, 0.8);
            width: 70px;
            font-size: 17px;
            border: none;
            margin-bottom: 8px;
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .post-comment:hover {
            background-color: hsla(173, 100%, 32%, 0.8);
            
        }
    </style>
</head>
<body>

<!-- Display Username in the header -->

<?php
// Assuming you already have a connection to the database
$conn = new mysqli("localhost", "root", "", "tourism_website");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the posts from the database
$posts = $conn->query("SELECT * FROM blog_posts ORDER BY date_posted DESC");
?>

<header class="header" data-header>
    <div class="container">

      <a href="home.php">
      
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">
         
          <li>
            <a href="home.php">
              <img src="assets/images/visitph_logo.png">
            </a>
          </li>

          <li>
            <a href="home.php" class="navbar-link">Home</a>
          </li>

          <!-- <li>
            <a href="favorites.php" class="navbar-link">Favorites</a>
          </li> -->

          <li>
            <a href="1_FeaturedIndex.php" class="navbar-link">Featured</a>
          </li>

          <li>
            <a href="1_DestinationIndex.php" class="navbar-link">Destinations</a>
          </li>

          <li>
            <a href="1_blog.php" class="navbar-link">Blog</a>
          </li>

          <?php if (isset($_SESSION['username'])): ?>
                            <!-- If user is logged in, show their username -->
                            <button class="btn username-btn">Hi, <?= $_SESSION['username'] ?></button>
                            <a href="logout.php" class="btn btn-secondary">Logout</a>
                        <?php else: ?>
                            <!-- If no user is logged in, show Sign Up -->
                            <a href="login.php" class="btn btn-secondary">Sign In</a>
                        <?php endif; ?>

          

          </div>
      </nav>
    </div>
  </header>
  <br><br><br><br><br><br><br><br>
<?php while ($post = $posts->fetch_assoc()): ?>
    
    
    <div class="blog-container" data-id="<?= $post['id'] ?>">
        <div class="blog-header">
            <img src="http://localhost/GROUP9/assets/images/fb_default.png">
            <div class="author-info">
            <div class="name"><?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "Guest" ?></div>

                <div class="date"><?= date("F j, Y", strtotime($post['date_posted'])) ?></div>
            </div>
        </div>
        <div class="blog-content">
            <p><?= htmlspecialchars($post['content']) ?></p>
            <img src="<?= htmlspecialchars($post['image']) ?>" class="blog-image">
        </div>
        <div class="blog-footer">
            <div class="blog-actions">
                <button class="like-btn"><?= $post['likes'] ?> Like</button>
                <button class="comment-btn">Comment</button>
            </div>
        </div>

        <!-- Comment Box -->
        <div class="comment-box">
            <textarea class="comment-input" placeholder="Write a comment..."></textarea>
            <button class="post-comment">Post</button>
        </div>
        <div class="comments"></div>

        <!-- Delete Button -->
        <form action="delete_post.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
            <input type="hidden" name="post_id" value="<?= $post['id']; ?>">
            <button type="submit" class="delete-btn">Delete</button>
        </form>
    </div>

    
<?php endwhile; ?>

<script>
$(document).ready(function() {
    $(".like-btn").click(function() {
        let postContainer = $(this).closest(".blog-container");
        let postId = postContainer.data("id");
        let btn = $(this);

        $.post("like.php", { post_id: postId }, function(response) {
            let likes = response.likes;
            btn.text(likes + (response.liked ? " Liked" : " Like"));
        }, "json");
    });

    $(".comment-btn").click(function() {
        $(this).closest(".blog-container").find(".comment-box").toggle();
    });

    $(".post-comment").click(function() {
        let postContainer = $(this).closest(".blog-container");
        let postId = postContainer.data("id");
        let commentText = postContainer.find(".comment-input").val();
        let commentsDiv = postContainer.find(".comments");

        $.post("comment.php", { post_id: postId, comment: commentText }, function(response) {
            commentsDiv.append("<p><b><?= $_SESSION['username'] ?></b>: " + commentText + "</p>");
            postContainer.find(".comment-input").val("");
        });
    });
});
</script>

<?php include('footer.php')?>



  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
