<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-index.css" />    
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-login.css" />    
</head>
<body> 
    <div class="navigation-container">
        <div class="navigation-menu">here comes the navigation-menu</div>
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

    <div class="filter-container">
        <div class="filter-left">MEN'S BAGS | name of the bag type</div>
        <div class="filter-center"></div>
        <div class="filter-right">
            <div class="filter-dropdown">
            <button id="button-category">category</button>  
                <div id="category-dropdown" class="dropdown-content">
                    <a href="#bags_totes">Totes</a>
                    <a href="#bags_messenger">Messenger Bags</a>
                    <a href="#bags_duffle">Duffle Bags</a>
                    <a href="#bags_back">Back Bags</a>
                    <a href="#bags_belt">Belt Bags</a>
                </div>  
            </div>
        </div>
    </div>

    <div class="product-container">
        <div class="product-row1">
            <?php include "php/product-row1.php"; ?>
        </div>
    </div>

    
<script>
// if I click on the button I want to see a dropdown list 
button_signin = document.getElementById("button-signin").onclick = function() {myFunction1()};

function myFunction1() {
  document.getElementById("signin-dropdown").classList.toggle("show");
}

// if I click on a item of the dropdown list I want to select an category

button_category = document.getElementById("button-category").onclick = function() {myFunction2()};

function myFunction2() {
  document.getElementById("category-dropdown").classList.toggle("show");
}

// This category of products has to show the pictures in my "product-container" 

</script>

</body>
</html>