<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the selected destination based on ID
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("Destination not found!");
    }
    $stmt->close();
} else {
    die("No destination selected!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($row['title']) ?> - Visit Philippines</title>

    <link rel="icon" href="./assets/images/turtleGOLD-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .top10 {
                width: 100%;
                max-width: 600px; /* Adjust to match hardcoded size */
                height: auto;
                border-radius: 25px;
                display: block;
                margin: 0 auto; /* Center the image */
            }
            .header img {
                width: 250px;  /* Adjust based on your hardcoded version */
                height: 100px;
                border-radius: 25px;      /* Maintains aspect ratio */
}

.hero-title {
    font-size: 7rem; /* Adjust as needed */
    font-weight: 700;
    text-align: center;
    margin-top: 50px;
}

.hero-text {
    font-size: 3rem;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.5;
    text-align: center;
}


    </style>
</head>

<body id="top">

<header class="header" data-header>
    <div class="container">
        <a href="home.php">
            <img src="assets/images/visitph_logo.png">
        </a>

        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </button>

        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="home.php" class="navbar-link">Home</a></li>
                <li><a href="1_FeaturedIndex.php" class="navbar-link">Featured</a></li>
                <li><a href="1_DestinationIndex.php" class="navbar-link">Destinations</a></li>
                <li><a href="1_blog.php" class="navbar-link">Blog</a></li>

                <?php if (isset($_SESSION['username'])): ?>
                    <button class="btn username-btn">Hi, <?= $_SESSION['username'] ?></button>
                    <a href="logout.php" class="btn btn-secondary">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-secondary">Sign In</a>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

<main>
    <article>
        <section class="section hero" style="background-image: url('./assets/images/hero-bg-bottom.png'), url('./assets/images/hero-bg-top.png')">
            <div class="container">
                <div class="hero-content">
                    <h2 class="hero-title"><?= htmlspecialchars($row['title']) ?></h2>
                    <p class="hero-text"><?= nl2br(htmlspecialchars($row['description'])) ?></p>

                    <img src="./assets/images/<?= htmlspecialchars($row['image_filename']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" class="top10">

                    <form action="share_post.php" method="POST">
                        <input type="hidden" name="image" value="http://localhost/GROUP9/assets/images/<?= htmlspecialchars($row['image_filename']) ?>">
                        <input type="hidden" name="description" value="<?= htmlspecialchars($row['description']) ?>">
                        <input type="hidden" name="author" value="<?= $_SESSION['username'] ?? 'Guest'; ?>">
                        <button type="submit" name="share" class="btn btn-primary">Share</button>
                    </form>
                </div>
            </div>
        </section>
    </article>
</main>

<?php include('footer.php'); ?>

<a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
</a>

<script src="./assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./slideshow.js"></script>

</body>
</html>
