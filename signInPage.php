<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>CyMaT</title>
    <link rel="stylesheet" href="css pages/signInPage.css">
    <link rel="shortcut icon" type="image/png" href="images/screwdriver-wrench-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <img src="images/poza2.webp" alt="">
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Log In</div>
          <form action="../ProiectTW/includes/login.inc.php" method = "post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name = "username" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name = "pwd" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="mainPage.php">Return to home?</a></div>
              <div class="button input-box">
                <input type="submit" name = "submit" value="Log In">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Sign Up</div>
        <form action="../ProiectTW/includes/signup.inc.php" method = "post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name = "name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name = "uid" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name = "email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name = "pwd" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name = "pwdrepeat" placeholder="Retype password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name = "submit" value="Sign Up">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
