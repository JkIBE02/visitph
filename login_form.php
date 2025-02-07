<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> i Love PH - Login </title>

    <!-- CSS -->
    <link rel="stylesheet" href="sign_up_form.css">
    
    <link rel="icon" href="./assets/images/turtleGOLD-removebg-preview.png" type="image/x-icon">     
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header></header>
                <form action="login.php" method="POST">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="register.html" class="link signup-link">Sign up</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="www.facebook.com" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="www.gmail.com" class="field google">
                    <img src="assets/images/google_logo.jpg" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

            <div class="media-options">
                <a href="home.html" class="field google">
                    <img src="/assets/images/home_page_icon.png" alt="home-page icon" class="google-img">
                    <span>Back to Home Page</span>
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="sign_up.js"></script>
</body>
</html>
