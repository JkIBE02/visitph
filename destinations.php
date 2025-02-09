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
          </li> -->

        </ul> 

      

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

          <p class="section-subtitle">Destinations</p>
         

          <h2 class="h2 section-title">Destinations</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/manila_cathedral.jpg" width="1140" height="1100" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Manila Cathedral</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/manila_ocean_park.jpg" width="1140" height="1100" loading="lazy"
                    alt="Coron Island, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Manila Ocean Park</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/bgc.jpg" width="1110" height="480" loading="lazy"
                    alt="Puerto Princesa, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Bonifacio Global City</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/intramuros.jpg" width="1110" height="480" loading="lazy"
                    alt="Verde Island, Batangas" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Intramuros</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/mayon_volcano.jpg" width="1110" height="480" loading="lazy"
                    alt="Enchanted River, Hinatuan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Albay</p>

                  <h3 class="h3 card-title">Mayon Volcano</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>

     

      <section class="section destination">
        <div class="container">

          <!--<p class="section-subtitle">Destinations</p>-->

          <h2 class="h2 section-title"></h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="palawan.php" class="destination-card">
                
                <figure class="card-banner">
                  <img src="./assets/images/puerto princesa.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Palawan</p>

                  <h3 class="h3 card-title">Puerto Princesa</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="boracay.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Boracay_White_Beach.png" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Aklan</p>

                  <h3 class="h3 card-title">Boracay</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="siargao.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Siargao.png" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Surigao Del Norte</p>

                  <h3 class="h3 card-title">Siargao</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="la_union.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/La Union.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Ilocos</p>

                  <h3 class="h3 card-title">La Union</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="ifugao.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/banaue_top10" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Ifugao</p>

                  <h3 class="h3 card-title">Banaue Rice Terrace</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="manila.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/intramuros.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Manila</p>

                  <h3 class="h3 card-title">Intramuros</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="kayangan.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Kayangan Lake.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Northern Palawan</p>

                  <h3 class="h3 card-title">Kayangan Lake</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="sulu.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Tubbataha.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Sulu Sea</p>

                  <h3 class="h3 card-title">Tubbataha Reef</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="ilocos.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Vigan City.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Ilocos Sur</p>

                  <h3 class="h3 card-title">Vigan City</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="batanes.php" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Batanes.jpg" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Batanes</p>

                  <h3 class="h3 card-title">Batanes</h3>
                </div>

              </a>
            </li>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/Boracay_White_Beach.png" width="1140" height="1100" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Aklan</p>

                  <h3 class="h3 card-title">Boracay</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/bantayan_island.jpg" width="1140" height="1100" loading="lazy"
                    alt="Coron Island, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Cebu</p>

                  <h3 class="h3 card-title">Bantayan Island</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/kawasan_falls.jpg" width="1110" height="480" loading="lazy"
                    alt="Puerto Princesa, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Cebu</p>

                  <h3 class="h3 card-title">Kawasan Falls</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/chocolate-hills.jpg" width="1110" height="480" loading="lazy"
                    alt="Verde Island, Batangas" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Cebu</p>

                  <h3 class="h3 card-title">Chocolate Hills</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/ayala_cebu.jpg" width="1110" height="480" loading="lazy"
                    alt="Enchanted River, Hinatuan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Cebu</p>

                  <h3 class="h3 card-title">Ayala Center Cebu</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>

      <section class="section destination">
        <div class="container">

          <!--<p class="section-subtitle">Destinations</p>-->

          <h2 class="h2 section-title"></h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/pink_mosque.jpg" width="1140" height="1100" loading="lazy"
                    alt="Aklan, Boracay" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Maguindanao</p>

                  <h3 class="h3 card-title">Pink Mosque</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/Eden_nature_park.jpg" width="1140" height="1100" loading="lazy"
                    alt="Coron Island, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Davao City</p>

                  <h3 class="h3 card-title">Eden Nature Park</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/malagos_garden_resort.jpg" width="1110" height="480" loading="lazy"
                    alt="Puerto Princesa, Palawan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Davao City</p>

                  <h3 class="h3 card-title">Malagos Garden Resort</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/Samal_Island.jpg" width="1110" height="480" loading="lazy"
                    alt="Verde Island, Batangas" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Davao Del Norte</p>

                  <h3 class="h3 card-title">Samal Island</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <!-- <figure class="card-banner">
                  <img src="./assets/images/mount_apo.jpg" width="1110" height="480" loading="lazy"
                    alt="Enchanted River, Hinatuan" class="img-cover">
                </figure> -->

                <div class="card-content">
                  <p class="card-subtitle">Cotabato</p>

                  <h3 class="h3 card-title">Mount Apo</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>




      <!-- 
        - #POPULAR
      -->
      <!---->
      



      <?php include('footer.php')?>

  <!-- 
    - #FOOTER
  -->

  <!-- <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Top destination</p>
          </li>

          <li>
            <a href="#" class="footer-link">Aklan, Boracay</a>
          </li>

          <li>
            <a href="#" class="footer-link">Palawan, Coron Island</a>
          </li>

          <li>
            <a href="#" class="footer-link">Palawan, Puerto Princesa</a>
          </li>

          <li>
            <a href="#" class="footer-link">Batangas, Verde Island</a>
          </li>

          <li>
            <a href="#" class="footer-link">Bohol, Virgin Island</a>
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

      <div class="footer-bottom"> -->

        <!-- <a href="#" class="logo">Visit Philippines</a>

        

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
  </footer> -->





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

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>