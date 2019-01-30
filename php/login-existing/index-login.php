<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP FORM</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles-form.css" />
</head>

<body>
    <form action="loginFormHandler.php" method="POST">

        <h1>Bestaande Klanten</h1>

        <legend>Inlog-scherm<br>&nbsp<br></legend>
        <label for="mail">E-mail adres:</label>
        <input type="email" id="mail" name="customers_email" autofocus placeholder="Gebruik uw e-mail adres om in te loggen">
        <label for="password">Paswoord:</label>
        <input type="password" id="password" name="customers_password" placeholder="Uw wachtwoord">
        <br>
        <br>
        <button type="submit">Maak een account aan</button>

    </form>
</body>
</html>