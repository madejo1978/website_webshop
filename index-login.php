<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles-login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="php/login-existing/styles-form.css" />    
</head>
<body> 
    <div class="navigation-container">
        <div class="navigation-menu">Here comes the navigation-menu</div>
        <div class="navigation-center">Empty space in the middle</div>
        <div class="navigation-icons" >
            <a href="index.php">Home</a>icons login searchbar shopping basket
        </div>
    </div>

<div class="login-container">          
    <div class="login-existing">
        <form action="php/login-existing/loginFormHandler.php" method="POST">
            <h1></h1>
            <legend>Inlog-scherm<br>&nbsp<br><br></legend>
            <label for="mail"></label>
            <input type="email" id="mail" name="customers_email" autofocus placeholder="Uw e-mail adres">
            <label for="password"></label>
            <input type="password" id="password" name="customers_password" placeholder="Uw wachtwoord">
            <br>
            <br>
            <button type="submit">Inloggen</button>
        </form>    
    </div>
    
    <div class="login-new">
        <form action="formHandler.php" method="GET">
            <h1></h1>
            <legend></legend>
            <label for="name"></label>
            <input type="text" id="name" name="customers_firstname" autofocus placeholder="Uw voornaam">
            <label for="mail"></label>
            <input type="email" id="mail" name="customers_email" placeholder="Uw e-mail wordt uw Login">
            <label for="password"></label>
            <input type="password" id="password" name="customers_password" placeholder="Uw wachtwoord">
            <br>
            <br>
            <button type="submit">Nieuw account</button>    
        </form>
    </div>
</div>

</body>
</html>