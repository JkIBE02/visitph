<?php
session_start();
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
  <link rel="stylesheet" href="./assets/css/destination-style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

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

          <!-- <li>
            <a href="explore.php" class="navbar-link">Explore</a>
          </li> -->

        </ul> 

      

      </nav>

    </div>
  </header>





  <main>
    

      <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism_website";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch destinations
$sql = "SELECT id, title, name, image_filename FROM products WHERE category_type = 2";
$result = $conn->query($sql);
?>

<section class="section destination">
  <div class="container">
        <h2 class="h2 section-title">Destinations</h2>
        <h2 class="h2 section-title">Destinations</h2>
        <ul class="destination-list">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <li class="w-50">
                <a href="1_DestinationDisplay.php?id=<?= $row['id'] ?>" class="destination-card">
                    <figure class="card-banner">
                        <img src="./assets/images/<?= $row['image_filename'] ?>" loading="lazy" 
                            alt="<?= $row['title'] ?>" class="img-cover">
                    </figure>
                    <div class="card-content">
                        <p class="card-subtitle"><?= $row['name'] ?></p>
                        <h3 class="h3 card-title"><?= $row['title'] ?></h3>
                    </div>
                </a>
                <!-- Delete Button -->
                <form action="1_DestinationDelete.php" method="POST" style="margin-top: 10px;">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="destination_name" value="<?= $row['name'] ?>">
                    <input type="hidden" name="image_filename" value="<?= $row['image_filename'] ?>">
                    <button type="submit" name="delete" class="delete-btn">Delete</button>
                </form>
            </li>
          <?php } ?>
        </ul>
        <a href="1_AddDestination.php" class="btn btn-primary">Add Destination</a>
  </div>
</section>

<?php $conn->close(); ?>

<!-- Add Destination Button -->




<!-- The Modal -->
<div id="uploadModal" class="modal">
    <div class="modal-content">
    <span id="closeModalBtn" class="close">&times;</span>

        <h2>Add New Destination</h2>
        <form action="1_DestinationCreate.php" method="POST" enctype="multipart/form-data">
            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Description:</label>
            <textarea name="description" required></textarea>

            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Upload Image:</label>
            <input type="file" name="image" accept="image/*" required>

            <label>Category Type:</label>
            <select name="category_type" required>
                <option value="1">Featured (Food & Activities)</option>
                <option value="2">Destinations (Places)</option>
            </select>

            <button type="submit" name="upload">Upload</button>
        </form>
    </div>
</div>


      <!-- 
        - #POPULAR
      -->
      <!---->
      



      <?php include('footer.php')?>

 

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <script>
    function openModal() {
        document.getElementById("uploadModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("uploadModal").style.display = "none";
    }

    // Close modal if user clicks outside of it
    window.onclick = function(event) {
        var modal = document.getElementById("uploadModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("uploadModal");  // Get modal
    const openBtn = document.getElementById("addDestinationBtn"); // Get Open button
    const closeBtn = document.getElementById("closeModalBtn"); // Get Close button

    // Open the modal when "Add Destination" is clicked
    openBtn.addEventListener("click", function () {
        modal.style.display = "flex";
    });

    // Close the modal when "X" is clicked
    closeBtn.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Close the modal when clicking outside of it
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});




</script>


</body>

</html>