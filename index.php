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
        <div class="navigation-menu">here comes the navigation-menu</div>
        <div class="navigation-center">empty space in the middle</div>
        <div class="navigation-icons" >
            <a href="index-login.php">Sign In</a> icons login searchbar basket
        </div>
    </div>
    
    <div class="main-page">          
        <div class="main-page-text">
        <h1>Here comes the WELCOME-text<br></h1></div>
        <div class="main-page-button">    
        <button>To the Products</button></div>
    </div>

    <div class="filter-container">
        <div class="filter-left">MEN'S BAGS | name of the bag type</div>
        <div class="filter-center">empty space in the middle</div>
        <div class="filter-right">
        <div class="filter-dropdown">
        <button onclick="myFunction()" class="button-category">category</button>filter: price and color 
                <div id="dropdown-choice" class="dropdown-content">
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
// if I click on the button 'category' I want to see a dropdown list of the href-list made in the HTML
function myFunction() {
  document.getElementById("dropdown-choice").classList.toggle("show");
}
// if I click on a item of the dropdown list I want to select an category

// This category of products has to show the pictures in my "product-container" 

</script>

</body>
</html>