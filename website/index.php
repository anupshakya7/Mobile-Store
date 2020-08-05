<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
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
                <li>
                <?php
                    if(isset($_SESSION['usersId'])){
                        echo '<p> Welcome "'.$_SESSION['email'].'"</p>';
                        echo '<form action="includes/logout.inc.php" method="POST">
                        <button type="submit" class="logout" name="logout">Logout</button>
                        </form>';
                    }else{
                        echo '<a href="account.php">Account</a>';
                    }
                ?>
                </li>
            </ul>
        </div>
    </nav>

    <div class="information">
        <div class="overlay"></div>
        <img src="images/mobile.png" class="mobile">
        <div id="circle">
            <div class="feature one">
                <img src="images/camera1.png">
                <div>
                    <h1>Camera</h1>
                    <p>12MP, Wide Angle Lens</p>    
                </div>
            </div>
            <div class="feature two">
                <img src="images/processor1.png">
                <div>
                    <h1>Processor</h1>
                    <p>Snapdragon Octa-core </p>    
                </div>
            </div>
            <div class="feature three">
                <img src="images/display1.png">
                <div>
                    <h1>Display</h1>
                    <p>6.5" Mini-Drop Fullscreen</p>    
                </div>
            </div>
            <div class="feature four">
                <img src="images/battery1.png">
                <div>
                    <h1>Battery Life</h1>
                    <p>5000mAH, 720Hrs Standby</p>    
                </div>
            </div>
        </div>
        <div class="controls">
            <img src="images/upArrow1.png" id="upBtn">
            <h3>Features</h3>
            <img src="images/downArrow1.png" id="downBtn">   
    </div>
    </div>

</div>

<script>


var circle = document.getElementById("circle");
    var upBtn = document.getElementById("upBtn");
    var downBtn = document.getElementById("downBtn");

    var rotateValue = circle.style.transform;
    var rotateSum;


    upBtn.onclick = function()
    {
        rotateSum = rotateValue + "rotate(-90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;
    }

    downBtn.onclick = function()
    {
        rotateSum = rotateValue + "rotate(90deg)";
        circle.style.transform = rotateSum;
        rotateValue = rotateSum;
    }

</script>
    
</body>
</html>