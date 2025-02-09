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

          <!-- <li>
            <a href="favorites.php" class="navbar-link">Favorites</a>
          </li> -->

          <li>
            <a href="featured.php" class="navbar-link">Featured</a>
          </li>

          <li>
            <a href="destinations.php" class="navbar-link">Destinations</a>
          </li>

          <li>
            <a href="blog.php" class="navbar-link">Blog</a>
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


<!-- Slideshow container -->
<!-- <div class="slideshow-container">




<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="./assets/images/slide1.jpg" style="width:100%">
  <div class="text"></div>
</div>


  
  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="./assets/images/surfing.png" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="./assets/images/slide3.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="./assets/images/slides3.jpg" style="width:100%">
    <div class="text"></div>
  </div>

   Next and previous buttons
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div> -->


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <!--<img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">-->

          <div class="hero-content">

            <p class="section-subtitle">Ilocos</p>
            <img src="./assets/images/la_union_top10.jpg" class="top10">

            <h2 class="hero-title"></h2>

            <p class="hero-text">
                La Union, located in the Ilocos Region of the Philippines, is a favorite destination for surfers, beach lovers, and those seeking a laid-back vibe. Known as the "Surfing Capital of Northern Luzon," it offers excellent surf breaks, with San Juan Beach being the hub for both beginners and seasoned surfers. Beyond surfing, La Union boasts a mix of natural and cultural attractions, from waterfalls and botanical gardens to historical landmarks.
            </p>

            <form action="share_post.php" method="POST">
              <input type="hidden" name="image" value="http://localhost/GROUP9/assets/images/la_union_top10.jpg">
              <input type="hidden" name="description" value="La Union.">
              <input type="hidden" name="author" value="<?php echo $_SESSION['username'] ?? 'Guest'; ?>"> 
              <button type="submit" name="share" class="btn btn-primary">Share</button>
            </form>

           <!-- <div class="btn-group">
              <a href="contact_us.php" class="btn btn-primary">Contact Us</a>

              
            </div> -->

          </div>

          <!--<figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>-->

        </div>
      </section>





     

      





      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php include('footer.php')?>

  <!-- <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Top destination</p>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Aklan</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Palawan</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Batanes</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Sulu Sea</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Ilocos</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Categories</p>
          </li>

          

          <li>
            <a href="explore.php" class="footer-link">Activities</a>
          </li>

          
          <li>
            <a href="explore.php" class="footer-link">Culture</a>
          </li>

          <li>
            <a href="explore.php" class="footer-link">Foods</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick links</p>
          </li>

          <li>
            <a href="about_us.php" class="footer-link">About</a>
          </li>

          <li>
            <a href="contact_us.php" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tours</a>
          </li>

          
          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <div class="footer-list">

          

          

          <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <a href="#" class="logo">Visit Philippines</a>

        

        <ul class="social-list"> -->

          <!-- <li>
            <a href="https://www.facebook.com/" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://twitter.com/?lang=en" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/login" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.google.com/" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer> -->


  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>


  <script src="./assets/js/script.js"></script>

  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./slideshow.js"></script>

</body>

</html>