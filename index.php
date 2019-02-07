<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-index.css" />        
    <!--- <script src="js/main.js"></script> --->
</head>
<body> 
    
<div class="navigation-container">
        <div class="navigation-left ">
            <div class="navigation-logged-in">Welcome <?php include 'php/login-existing/login-form-welcome.php' ;?> </div>    
        </div>
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
            <button type="submit"></button>
            <input type="button" onclick="location.href='php/log-out.php';" value="Sign Out"/>
        </div>
    </div>

    <div class="main-page">          
        <div class="main-page-text">
        <h1>Something is MISSING!<br></h1></div>
        <div class="main-page-button">    
        <button id="get-pics-all">SHOW me ALL the BAGS</button></div>
    </div>

<button id="test123">Test123</button>

<button id="get-pics-back">Show Back Bags</button>



<!---
    <form>
         <button type="submit" formaction="php/product-row2.php">Click me</button>
    </form>
---->

    <div class="filter-container">
        <div class="filter-left">MEN'S BAGS | 
        </div>

        
        <div class="filter-center"></div>
        <div class="filter-right">
            <div class="filter-dropdown">
            <button id="button-category">category</button>  
                <div id="category-dropdown" class="dropdown-content">
                    <a onclick="getPicsBack()">Back Bags</a>
                    <a onclick="getPicsBelt()">Belt Bags</a>
                    <a onclick="getPicsDuffle()">Duffle Bags</a>
                    <a onclick="getPicsMessenger()">Messenger Bags</a>
                    <a onclick="getPicsTotes()">Totes</a>
                </div>  
            </div>
        </div>
    </div>

    

    <div class="product-container">
        <div id="product-row-1">
            </div>

<!----        <div class="product-row2">
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
    --->
    </div>

    
<script>
///////////////////
// Dropdown login
/////////////////// 
button_signin = document.getElementById("button-signin").
onclick = function() {myFunction1()};

function myFunction1() {
document.getElementById("signin-dropdown").classList.toggle("show");
}

////////////////////////
// Dropdown filter bags
////////////////////////
button_category = document.getElementById("button-category").
onclick = function() {myFunction2()};

function myFunction2() {
document.getElementById("category-dropdown").classList.toggle("show");
}

////////////////////////
// AJAX
////////////////////////

// Activate buttons with EventListener //

// Button GET-PICS-ALL //
document.getElementById("get-pics-all").addEventListener
("click", getPics);

function getPics(){
    console.log("button with id get-pics-all clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-all.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-BACK //
document.getElementById("get-pics-back").addEventListener
("click", getPicsBack);

function getPicsBack(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-back.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-BELT //
document.getElementById("get-pics-belt").addEventListener
("click", getPicsBack);

function getPicsBelt(){
    console.log("button with id get-pics-belt clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-belt.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-DUFFLE //
document.getElementById("get-pics-duffle").addEventListener
("click", getPicsDuffle);

function getPicsDuffle(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-duffle.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-MESSENGER //
document.getElementById("get-pics-messenger").addEventListener
("click", getPicsMessenger);

function getPicsMessenger(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-messenger.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-TOTES //
document.getElementById("get-pics-totes").addEventListener
("click", getPicsTotes);

function getPicsTotes(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-totes.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}


</script>

</body>
</html>