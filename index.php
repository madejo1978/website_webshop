
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
        <div class="navigation-left ">
            <div class="navigation-logged-in">Welcome <?php include 'php/login-existing/login-form-welcome.php' ;?> </div>    
        </div>
        <div class="navigation-center"> 
        <div class="filter-container">
        <div class="filter-right">
            <input type="button" class="button" onclick="location.href='php/log-out.php';" value="Sign Out"/></div>
            <input type="button" class="button" onclick="location.href='php/cart/checkout.php';" value="Shopping Bag"/></div>
    </div>
</div>

        <div class="navigation-icons" >
            <div class="filter-dropdown">
            <button id="button-signin" class="button">Sign in</button>  
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
                <input type="button" class="button" onclick="location.href='index-admin.php';" value="Administrator"/></div>
            </div>
        </div>
        </div>
    </div>

    <div class="main-page">          
        <div class="main-page-text">
        <h1>Something is MISSING!<br></h1></div>
        <div class="main-page-button">    
        <button id="get-pics-all" >SHOW me the BAGS</button></div>
    </div>

<!---
<button id="test123">Test123</button>

<button id="get-pics-back">Show Back Bags</button>
---->


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
            <button id="button-category" class = "button" >category</button>  
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
            

<script src="js/main.js"></script>



</body>
</html>
