<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title></title>
</head>
<body>

<div class="main">
    <nav>
        <div class="logo">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </div>
    </nav>

    <div class="loginform">
        <img src="images/user.png" class="userIcon">
            <h2>Login Now</h2>
            <form action="includes/account.inc.php" method="POST">
                <input type="text" name="email1" class="input-box" placeholder="Email...">
                <input type="password" name="password1" class="input-box" placeholder="Password...">
                <p class="rememberpassword"><a href="forgetPassword.php">Forget Password</a></p>
                <button type="submit" class="signup-btn" name="login-submit">Login</button>
                <hr>
                <p class="or">OR</p>
                <button type="submit" class="twitter-btn">Login with twitter</button>
                <p class="signuppage">Do you have an account ? <a href="signup.php">Sign in</a></p>
            </form>
    </div>

    <!-- <div class="information">
        <div class="overlay"></div>
        
   

    </div> -->

   

    </div>


    
</body>
</html>