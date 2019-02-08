<?php
    include "db_connection.php";        

    if(isset($_GET['bags_id'])){
        $user_id = $_GET['bags_id'];
    }else{
        $user_id = 1;
    }    
    
    $sql_querie = "SELECT bags_id, bags_type, bags_name, bags_price, bags_code, bags_pic FROM bags WHERE bags_id = '$user_id'";
    
    $db_result = $db_connection->query($sql_querie);  

    foreach ($db_result as $row)
    
{       // Picture              
    echo '<div class="bag-picture">' .
            '<img src="' . $row['bags_pic'] . '"alt="' . '" style="width:100%">' .
        '</div>'.
        
        // Name
        '<div class="bag-details">' .
            '<a href="cart/checkout.php?bags_id=' . $row['bags_id'] . '">' . 
            '<h1>' . $row['bags_name'] . '<h1>' . '<br>' .
        // Price
            '<h1>' . '€ ' . $row['bags_price'] . '<h1>' . '<hr>' .
        // Type
            '<h2>' . $row['bags_code'] . '<h2>' . '<br>' .
        '</div>' ;
    }       


// '<a href="cart/cart.php?bags_id=' . $row['bags_id'] . '">' .
    // '<a href="index-bag-details.php?bags_id=' . $row['bags_id'] . '">' .
    // <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> 
    // <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>    


    $conn = null;
?>