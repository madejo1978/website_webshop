<?php

//echo "hallo mooie jongen";

// if the user is not logged in display text: 'User, you are not logged in' 

// declaring a new variable:
$welcome_user = "User, you are not logged in";

// if not logged in show new variable:

function display_message(){
    if(isset($_SESSION["login-user"]))
    echo $_SESSION ["login-user"];
    else echo $welcome_user;
}

echo $_SESSION ["login-user"];

// 

?>
