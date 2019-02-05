<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-index.css" />        
</head>
<body> 
    
<div class="navigation-container">
        <div class="navigation-menu"></div>
        <div class="navigation-center"> 
        <div class="filter-container">
        <div class="filter-right">
        </div>
    </div>
</div>

        <div class="navigation-icons" >
            <div class="filter-dropdown">
            <button id="button-signin" class="button-dropdown">Sign in</button>  
                <div id="signin-dropdown" class="dropdown-content">
                    <div class="login-container">          
                        <div class="login-existing">
                            <form action="php/login-existing/loginFormExisting.php" method="POST">
                                <h1></h1>
                                <h1>Sign In<br>&nbsp<br><br></h1>
                                <label for="mail"></label>
                                <input type="email" id="mail" name="customers_email" autofocus placeholder="Your e-mail">
                                <label for="password"></label>
                                <input type="password" id="password" name="customers_password" placeholder="Your password">
                                <br>
                                <br>
                                <button type="submit">Sign In</button>
                                <input type="button" onclick="location.href='index-login.php';" value="Create Account"/>   
                            </form>    
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="main-page">          
        <div class="main-page-text">
        <h1>Something is MISSING!<br></h1></div>
        <div class="main-page-button">    
        <button>SHOW me the BAGS</button></div>
    </div>

    <form>
         <button type="submit" formaction="php/product-row2.php">Click me</button>
    </form>

    <div class="filter-container">
        <div class="filter-left">MEN'S BAGS | </div>
        <div class="filter-center"></div>
        <div class="filter-right">
            <div class="filter-dropdown">
            <button id="button-category">category</button>  
                <div id="category-dropdown" class="dropdown-content">
                    <a input onclick="php/product/row2.php">Back Bags</a>
                    <a href="#">Belt Bags</a>
                    <a href="#">Duffle Bags</a>
                    <a href="#">Messenger Bags</a>
                    <a href="#">Totes</a>
                </div>  
            </div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-row1">
            <?php include "php/product-row1.php"; ?>
        </div>
        <div class="product-row2">
            <?php include "php/product-row2.php"; ?>
        </div>
        <div class="product-row3">
            <?php include "php/product-row3.php"; ?>
        </div>
        <div class="product-row4">
            <?php include "php/product-row4.php"; ?>
        </div>
        <div class="product-row5">
            <?php include "php/product-row5.php"; ?>
        </div>
    </div>

    
<script>
// Dropdown login 
button_signin = document.getElementById("button-signin").
onclick = function() {myFunction1()};

function myFunction1() {
document.getElementById("signin-dropdown").classList.toggle("show");
}

// Dropdown filter bags
button_category = document.getElementById("button-category").
onclick = function() {myFunction2()};

function myFunction2() {
document.getElementById("category-dropdown").classList.toggle("show");
}

</script>

</body>
</html>