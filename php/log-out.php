
<?php
session_start();
unset($_SESSION["login-user"]); // deactivate session variabel    
session_destroy();
header("location: ../index.php");


?>