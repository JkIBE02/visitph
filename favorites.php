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

          <!-- <li>
            <a href="explore.php" class="navbar-link">Explore</a>
          </li> -->

        </ul> 

       

        <a href="login.php" class="btn btn-secondary">Sign Up</a>

      </nav>

    </div>
  </header>





  <main>
    <!--<article>

      

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Discovering The Philippines</p>

            <h2 class="hero-title">Trusted Travel Agency</h2>

            <p class="hero-text">
              A journey through a realm of breathtaking landscapes, vibrant cultures, and the genuine warmth of its people. As you traverse this enchanting archipelago, each island, each bite, and each encounter unveils a new chapter in a story that is uniquely Filipino.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>-->





      <!-- 
        - #DESTINATION
      -->

      <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Favorites</p>

          <h2 class="h2 section-title">Favorites</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/boracay_island.jpg" width="1140" height="1100" loading="lazy"
                    alt="Manila Cathedral" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Aklan</p>

                  <h3 class="h3 card-title">Boracay</h3>
                </div>

              </a>
            </li>

            <div class="favorite-images" id="favoriteSection"></div>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/vigan_top10.jpg" width="1140" height="1100" loading="lazy"
                    alt="Ocean Park" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Ilocos Sur</p>

                  <h3 class="h3 card-title">Vigan City</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/intramuros.jpg" width="1140" height="1100" loading="lazy"
                    alt="Manila Cathedral" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Intramuros</h3>
                </div>

              </a>
            </li>

            <li>
              <!--<a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/bgc.jpg" width="1110" height="480" loading="lazy"
                    alt="BGC" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Bonifacio Global City</h3>
                </div>

              </a>-->
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/intramuros.jpg" width="1110" height="480" loading="lazy"
                    alt="Intramuros" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Intramuros</h3>
                </div>

              </a>
            </li>

            <li>
              <!--<a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/mayon_volcano.jpg" width="1110" height="480" loading="lazy"
                    alt="Mayon Volcano" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Albay</p>

                  <h3 class="h3 card-title">Mayon Volcano</h3>
                </div>

              </a>-->
            </li>

          </ul>

        </div>
      </section>

     

      



      <!-- 
        - #POPULAR
      -->
      <!---->
      





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Top destination</p>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Aklan, Boracay</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Palawan, Puerto Princesa</a>
          </li>

          <li>
            <a href="destinations.php" class="footer-link">Palawan, Puerto Princesa</a>
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
            <a href="explore.php" class="footer-link">Food</a>
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

        

        <ul class="social-list">

          <li>
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
  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script src="share.js"></script>


  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>