<?php
    include "db_connection.php";        

    $sql_querie = "SELECT bags_id, bags_type, bags_name, bags_price, bags_code, bags_pic 
    FROM bags ";
    
    $db_result = $db_connection->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo // '<div class="product-row1">' .
             '<a href="index-bag-details.php?bags_id=' . $row['bags_id'] . '">' .     
             '<img src="' . $row['bags_pic'] . '" alt="' . ' ' . ' 
             "style="width:40vh" . "style="margin: auto auto">' .
             '</div>';  

            } 

    $conn = null;
?>