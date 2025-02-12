<?php
if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $category_type = $_POST['category_type'];

    // Handle Image Upload
    $target_dir = "assets/images/";
    $image_filename = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_filename;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Database Connection
    $conn = new mysqli("localhost", "root", "", "tourism_website");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into database
    $sql = "INSERT INTO products (title, description, name, image_filename, category_type) 
            VALUES ('$title', '$description', '$name', '$image_filename', '$category_type')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Destination Added Successfully!'); window.location.href='1_DestinationIndex.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>


1_DestinationDisplay.php
------BELOW-----------
<?php
session_start();


?>

<?php

$conn = new mysqli("localhost", "root", "", "tourism_website");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the posts from the database
$location = $conn->query("SELECT * FROM tourism_website.products WHERE id = 43");
$sql = "SELECT id, title, name, image_filename FROM products WHERE category_type = 2";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visit Philippines</title>

  <!-- 
    - favicon
  -->
  
  <link rel="icon" href="./assets/images/turtleGOLD-removebg-preview.png"  type="image/x-icon">
 

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .top10 {
    width: 100%;
    background-repeat: no-repeat;
    background-size: 30%;
    border-radius: 25px;
      }
    </style>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

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


          <li>
            <a href="featured.php" class="navbar-link">Featured</a>
          </li>

          <li>
            <a href="destinations.php" class="navbar-link">Destinations</a>
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

          <!-- <li>
            <a href="explore.php" class="navbar-link">Explore</a>
          </li>
          
        </ul> -->

      </nav>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

         

          <div class="hero-content">

            <p class="section-subtitle"></p>
            <img src="./assets/images/batanes_top10.jpg" class="top10">

            <h2 class="hero-title"></h2>

            <p class="hero-text">
                
            </p>

            <form action="share_post.php" method="POST">
              <input type="hidden" name="image" value="http://localhost/GROUP9/assets/images/batanes_top10.jpg">
              <input type="hidden" name="description" value="Batanes.">
              <input type="hidden" name="author" value="<?php echo $_SESSION['username'] ?? 'Guest'; ?>"> 
              <button type="submit" name="share" class="btn btn-primary">Share</button>
            </form>

            
          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php include('footer.php')?>


<a href="#top" class="go-top" data-go-top aria-label="Go To Top">
  <ion-icon name="chevron-up-outline"></ion-icon>
</a>


<script src="./assets/js/script.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./slideshow.js"></script>

</body>

</html>