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
            <h2>SignUp Now</h2>
            

            <form action="includes/signup.inc.php" method="POST">
                <input type="text" name="username" class="input-box" placeholder="Username..."> 
                <input type="text" name="email" class="input-box" placeholder="Email...">
                <input type="password" name="password" class="input-box" placeholder="Password...">
                <input type="password" name="confirmPassword" class="input-box" placeholder="Confirm Password...">
                <p><span><input type="checkbox"></span>I agree to the terms of services</p>
                <button type="submit" class="signup-btn" name="signup-submit">Sign Up</button>
                <hr>
                <p class="or">OR</p>
                <button type="submit" class="twitter-btn">Login with twitter</button>
                <p class="signuppage">Do you have an account ? <a href="account.php">Login</a></p>
            </form>

            <?php
                if(isset($_GET['signup'])){
                    if($_GET['signup'] == "empty"){
                        echo '<p class="error">Fill in all fields!!!</p>';
                    }else if($_GET['signup'] == "bothusernameandemailinvalid"){
                        echo '<p class="error"> Both Username and Email Invalid</p>';
                    }else if($_GET['signup'] == "invalidusername"){
                        echo '<p class="error"> Invalid Username</p>';
                    }else if($_GET['signup'] == "invalidEmail"){
                        echo '<p class="error"> Invalid Email Address</p>';
                    }

                }
            
            ?>
    </div>

    <!-- <div class="information">
        <div class="overlay"></div>
        
   

    </div> -->

   

    </div>


    
</body>
</html>