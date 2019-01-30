<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP FORM</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles-form.css" />
</head>

<body>
    <form action="formHandler.php" method="GET">

        <h1>Nieuw Account</h1>

        <legend>Nieuw bij Webshop.nl?<br>Maak binnen 2 minuten een account aan.<br>&nbsp<br></legend>
        <label for="name">Voornaam:</label>
        <input type="text" id="name" name="customers_firstname" autofocus placeholder="Uw voornaam">
        <label for="mail">E-mail adres:</label>
        <input type="email" id="mail" name="customers_email" placeholder="Uw e-mail wordt uw Login">
        <label for="password">Paswoord:</label>
        <input type="password" id="password" name="customers_password" placeholder="Uw wachtwoord">
        <br>
        <br>
        <button type="submit">Maak een account aan</button>

    </form>
</body>
</html>