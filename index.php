<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form & Registration Form | Beep Child-Tracker></title>
  <title>Real-Time GPS Tracking</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
</head>
<body>
      <!-- <h2>Real-Time GPS Tracking</h2> -->
      <div class="wrapper">
            <div class="form-wrapper sign-in">
                  <form action="register.php">
                        <h1>Login</h1>
                        <div class="input-box">
                              <input type="text" name="username" id="username" placeholder="Type your username" required>
                              <i class='bx bxs-user'></i>
                        </div>
              
                        <div class="input-box">
                              <input type="password" name="password" id="password" placeholder="Type your password" required>
                              <i class='bx bxs-lock-alt' ></i>
                        </div>
          
                        <div class="remember-forgot">
                              <label><input type="checkbox">Remember Me</label>
                              <a href="#">Forgot Password</a>
                        </div>
              
                         <button type="submit" class="btn">Login</button>
                        <div class="signin-link">
                              <p>Don't have an account? <a href="#" class="signinBtn-link">Sign Up</a></p>
                        </div>
                  </form>
            </div>
              
              
            <div class="form-wrapper sign-up">
                  <form action="register.php">
                        <h1>Sign Up</h1>
                        <div class="input-box">
                              <input type="text" name="fName" id="fName" placeholder="First Name" required>
                              <i class='bx bxs-user'></i>
                        </div>

                        <div class="input-box">
                              <input type="text" name="lName" id="lname" placeholder="Last Name" required>
                              <i class='bx bxs-user'></i>
                        </div>

                        <div class="input-box">
                              <input type="email" name="email" id="email" placeholder="Email" required>
                              <i class="bi bi-envelope"></i>
                        </div>                        
                        <div class="input-box">
                              <input type="password" name="password" id="password" placeholder="Password" required>
                              <i class='bx bxs-lock-alt' ></i>
                              <!--<label for="password">Password</label>-->          
                        </div>
                        <div class="remember-forgot">
                              <label><input type="checkbox">I agree to the terms & conditions </label>
                              <!-- <a href="#">Forgot Password</a> -->
                        </div>
                        <button type="submit" class="btn">Register Now</button>
                        <div class="signup-link">
                              <p>Already have an account? <a href="#" class="signupBtn-link">Sign In</a></p>
                        </div>
                    

                  </form>
            </div>
            <div id="map" style="display: none;"></div>

      </div>
                           
      <script src="script.js"></script>
</body>
</html>
