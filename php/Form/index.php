<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP FORM</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles-form.css" />
</head>

<body>
    <form action="formHandler.php" method="GET">

        <h1>Sign Up</h1>

        <legend>Nieuw bij Webshop.nl?<br>Maak binnen 2 minuten een account aan.<br>&nbsp<br></legend>
        <label for="name">Voornaam:</label>
        <input type="text" id="name" name="customers_firstname" autofocus placeholder="Uw voornaam">

        <label for="mail">E-mailadres:</label>
        <input type="email" id="mail" name="customers_email" placeholder="Uw E-mail wordt uw Login">
        <br>
        <br>
        <button type="submit">Sign Up</button>

    </form>
</body>
</html>