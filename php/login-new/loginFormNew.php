<?php
    
// moet overeenkomen met HTML, hier stel je de variabelen vast
        $email = $_POST["customers_email"];    
        $firstname = $_POST["customers_firstname"];
        $customers_password = $_POST["customers_password"]; // different name otherwise this name crashes with the same name in db-connection
     
    include "db_connection.php";
    
// conform values table
    try {  
        $sql = "INSERT INTO customers (customers_email, customers_firstname,customers_password)
        VALUES ('$email', '$firstname', '$customers_password')";
        
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Uw nieuwe account is aangemaakt <br/>";
        echo "Welkom " . $firstname;
        }

//?? snap ik niet, vragen Thomas
            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

// header verwijst naar hij moet inloggen
        //header("Location: index.php");  

        // $folderString = "../img/";
        // $folderString .= $_GET["user_firstname"];
        // echo $folderString;
    
        // $DBIMG = "banaantje.jpg";
    
        // $DMIMG = $folderString . $DBIMG;    

?>