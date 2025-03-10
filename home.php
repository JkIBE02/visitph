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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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

          <!-- <li>
            <a href="explore.php" class="navbar-link">Explore</a>
          </li>
          
        </ul> -->
        <!-- <div class="btn-registration"> -->
        <!-- <div class="btn-registration">
          <div class="btn-signup">
            <li>
              <a href="login.php" class="btn btn-secondary sign-up">Sign Up</a>
            </li>
          </div> -->

          <?php if (isset($_SESSION['username'])): ?>
                            <!-- If user is logged in, show their username -->
                            <button class="btn username-btn">Hi, <?= $_SESSION['username'] ?></button>
                            <a href="logout.php" class="btn btn-secondary">Logout</a>
                        <?php else: ?>
                            <!-- If no user is logged in, show Sign Up -->
                            <a href="login.php" class="btn btn-secondary">Sign In</a>
                        <?php endif; ?>

          <!-- <div class="btn-login">
            <li>
              <a href="index.php" class="btn btn-secondary log-in">Login</a>
            </li>
          </div> -->
        </div>
          
          
          
        
        
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
        <br><img src="./assets/images/banner.jpg" alt="" class="banner">
        <div class="container">

          

          <div class="hero-content-important">

            <p class="section-subtitle heading">Discovering The Philippines</p>

            <h2 class="hero-title"></h2>

            <p class="hero-text important">
              A journey through breathtaking landscapes, vibrant cultures, and the genuine warmth of its people. As you traverse this enchanting archipelago, each island, each bite, and each encounter unveils a new chapter in a story that is uniquely Filipino.
            </p>

            <!-- <div class="btn-group">
              <a href="contact_us.php" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>  -->

          </div>

          <!--<figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>-->

        </div>
      </section>





      <!-- 
        - #DESTINATION
      -->
     
      

      <section class="section popular">
        <div class="container">

          <p class="section-subtitle">Destinations</p>

          <h2 class="h2 section-title"></h2>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_DestinationIndex.php">
                    <img src="./assets/images/puerto_princesa.jpg" width="740" height="518" loading="lazy"
                      alt="Pinto Museum" class="img-cover">
                  </a>

                  <span class="#"> <!--class = card-badge -->
                    <a href="explore.php">
                    <!--<ion-icon name="time-outline"></ion-icon>-->
                    </a>
                  </span>
                  
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Palawan</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_DestinationIndex.php">
                    Officially the Province of Palawan is an archipelagic province of the Philippines that is located in the region of Mimaropa.
                    </p>
                  </h3>
                  

                  <address class="card-location"></address>

                </div>
                <a href="1_DestinationIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_DestinationIndex.php">
                    <img src="./assets/images/boracay.png" width="740" height="600" loading="lazy"
                      alt="Boracay" class="img-cover">
                  </a>

                  <span class="#"> <!--class="card-badge"-->
                    <!--<ion-icon name="time-outline"></ion-icon>-->

                   
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Boracay</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_DestinationIndex.php">
                    The island is known for its powdery white sand and gorgeous, pristine beaches.
                    </p>
                  </h3>

                  <address class="card-location"></address>
                 
                </div>
                <a href="1_DestinationIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_DestinationIndex.php">
                    <img src="./assets/images/siargao.jpg" width="200" height="200" loading="lazy"
                      alt="La Cathedral" class="img-cover">
                  </a>

                  <span class="#"> <!--card-badge CLASS -->
                    <!--<ion-icon name="time-outline"></ion-icon>-->

                    
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Siargao</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_DestinationIndex.php">
                    An island of nine municipalities in the province of Surigao del Norte.
                    </p>
                  </h3>

                  <address class="card-location"></address>

                </div>
                <a href="1_DestinationIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #POPULAR
      -->

      <section class="section popular">
        <div class="container">

          <p class="section-subtitle">Featured Tours</p>

          <h2 class="h2 section-title"></h2>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_FeaturedIndex.php">
                    <img src="./assets/images/bicol_express.jpg" width="740" height="518" loading="lazy"
                      alt="Pinto Museum" class="img-cover">
                  </a>

                  <span class="#"> <!--class = card-badge -->
                    <a href="explore.php">
                    <!--<ion-icon name="time-outline"></ion-icon>-->
                    </a>
                  </span>
                  
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Bicol Express</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_FeaturedIndex.php">
                      When nature meets food.
                    </p>
                  </h3>
                  

                  <address class="card-location"></address>

                </div>
                <a href="1_FeaturedIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_FeaturedIndex.php">
                    <img src="./assets/images/canyoneering.jpg" width="740" height="600" loading="lazy"
                      alt="The Peak" class="img-cover">
                  </a>

                  <span class="#"> <!--class="card-badge"-->
                    <!--<ion-icon name="time-outline"></ion-icon>-->

                   
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Canyoneering</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_FeaturedIndex.php">
                    Requiring rappels and ropework, technical climbing or down-climbing, technical jumps, and/or technical swims.
                  </p>

                  </h3>

                  <address class="card-location"></address>
                 
                </div>
                <a href="1_FeaturedIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="1_FeaturedIndex.php">
                    <img src="./assets/images/helmet_dive.jpg" width="200" height="200" loading="lazy"
                      alt="La Cathedral" class="img-cover">
                  </a>

                  <span class="#"> <!--card-badge CLASS -->
                    <!--<ion-icon name="time-outline"></ion-icon>-->

                    
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price"><h2>Helmet Dive</h2></div>

                    <!-- <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(4)</data>
                    </div> -->
                  </div>

                  <h3 class="card-title">
                    <p href="1_FeaturedIndex.php">
                      Gives you the chance to walk underwater without getting your hair wet.
                    </p>
                  </h3>

                  <address class="card-location"></address>

                </div>
                <a href="1_FeaturedIndex.php" class="btn-link">
                    <span>View More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
              </div>
            </li>

          </ul>

        </div>
      </section>
      



      <!-- 
        - #ABOUT
      -->

      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Explore with us.</h2>

            <p class="about-text">
              Founded with a passion for exploration, our platform has been dedicated to providing unforgettable travel experiences and we aim to inspire travelers to discover the wonders of Philippines with us.
            </p>

            <ul class="about-list">

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>

                  <p class="about-item-text">
                    We ensure that every traveler has an memorable experience.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Meet our Team</h3>

                  <p class="about-item-text">
                    With a genuine love for exploration to ensure every journey with us is filled with excitement, authenticity, and unforgettable memories.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>

                  <p class="about-item-text">
                    Count on our tours to deliver a stress-free experience and a dedication to exceeding your expectations at every turn.
                  </p>
                </div>

              </li>

            </ul>

            <a href="about_us.php" class="btn btn-primary">Learn More</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/DOT-decadeoftourism-fbhero1.jpg" width="100" height="100" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <p class="section-subtitle">Blog Post</p>

          <h2 class="h2 section-title"></h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="1_blog.php">
                    <img src="./assets/images/boracay_blog.jpg" width="700" height="700" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="#"> <!--CLASS="CARD-BADGE"-->
                    <!--<ion-icon name="time-outline"></ion-icon>-->
 
                     <!--<time datetime="12-04"></time>-->
                   </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/circle-photo-removebg-preview.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="1_blog.php" class="author-name">Alex Bogue</a>

                        <p class="author-title">Researcher</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="5:43"></time>

                  </div>

                  <h3 class="card-title">
                    <p href="1_blog.php">
                     Had a lot of fun, here Boracay, hope you guys doing great there!
                    </p>
                  </h3>

                  <a href="1_blog.php" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="1_blog.php">
                    <img src="./assets/images/blog-2.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="#"> <!--CLASS="CARD-BADGE"-->
                   <!--<ion-icon name="time-outline"></ion-icon>-->

                    <!--<time datetime="12-04"></time>-->
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="1_blog.php" class="author-name">Jony bristow</a>

                        <p class="author-title">Vlogger</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="9:54"></time>

                  </div>

                  <h3 class="card-title">
                    <p href="1_blog.php">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </p>
                  </h3>

                  <a href="1_blog.php" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="1_blog.php">
                    <img src="./assets/images/blog-3.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="#">
                   <!--<ion-icon name="time-outline"></ion-icon>-->

                    <!--<time datetime="12-04"></time>-->
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/cropped-Profile-Picture-Round-Color.png" width="40" height="40" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="1_blog.php" class="author-name">Gabriel Alexander</a>

                        <p class="author-title">Entrepreneur</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="11:12"></time>

                  </div>

                  <h3 class="card-title">
                    <p href="1_blog.php">
                      What a great day to stay here in Philippines
                    </p>
                  </h3>

                  <a href="1_blog.php" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <a href="1_DestinationIndex.php" class="footer-list-title">Destinations</a>
          </li>

         

        </ul>

        <ul class="footer-list">

          <li>
            <a href="1_FeaturedIndex.php" class="footer-list-title">Featured</a>
          </li>

          

          <!-- <li>
            <a href="featured.php" class="footer-link">Activities</a>
          </li>


          <li>
            <a href="featured.php" class="footer-link">Foods</a>
          </li> -->

        </ul>

        <ul class="footer-list">

          <li>
            <a href="about_us.php" class="footer-list-title">About Us</a>
          </li>

          <!-- <li>
            <a href="about_us.php" class="footer-link">About</a>
          </li> -->

          <li>
            <a href="contact_us.php" class="footer-link"></a>
          </li>

          <li>
            <a href="#" class="footer-link"></a>
          </li>

          
          <li>
            <a href="#" class="footer-link"></a>
          </li>

        </ul>

        <div class="footer-list">

          

          

          <!-- <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form> -->

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
  <script src="./slideshow.js"></script>

</body>

</html>