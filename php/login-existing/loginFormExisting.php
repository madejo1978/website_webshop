<?php
    include "db_connect.php";

// the second column is delivered from the HTML. The PHP receives it and puts them in variables (first column)
// you can only put them in variables if the method is corresponding with the HTML (POST or GET)
    $customers_email = $_POST['customers_email'];
    $customers_password = $_POST['customers_password'];

// first colomn is the SQL-table, second are the variable set in this PHP (above)
    $database_query = "SELECT customers_firstname
               FROM customers 
               WHERE customers_email = '$customers_email' 
               AND customers_password = '$customers_password'";

    $db_result = $db_connection->query($database_query);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['customers_firstname'];
        }
        
        echo "welkom " . $firstname;
    }
    else 
    {
        echo 'Uw e-mail adres of wachtwoord is niet bij ons bekend';
        // header("location:login.php?et=1;");
    
    // header verwijst naar hij moet inloggen
    // header("Location: index.html");
    }


?>