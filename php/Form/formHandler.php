<?php

    // echo "<br>";
    // echo $_GET["customers_firstname"]; 
    // echo "<br>";
    // echo $_GET["user_lastname"]; 
    // echo "<br>";
    // echo $_GET["customers_email"]; 
    // echo "<br>";
    // echo $_GET["user_job"]; 
    // echo "<br>";
    // echo $_GET["user_password"]; 

    // echo "GorillaPower";
    // echo "<br>";
    // echo $_POST["banaantje123123"]; 
    // echo "<br>";
    // echo $_POST["user_email"]; 
    // echo "<br>";
    // echo $_POST["user_password"]; 
    // echo "<br>";
    // echo $_POST["user_job"]; 
    // echo "<br>";
    // echo $_POST["user_email"]; 
    
    // moet overeenkomen met HTML, hier stel je de variabelen vast
        $email = $_GET["customers_email"];    
        $firstname = $_GET["customers_firstname"];
       
 
        //SELECT * FROM users WHERE user_email = '$user_email', user_pwe = '$userpw'
    
        include "db_connection.php";

        try {   // conform waarden database
                $sql = "INSERT INTO customers (customers_email,customers_firstname)
                VALUES ('$email', '$firstname')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Uw nieuwe account is aangemaakt";
            }
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