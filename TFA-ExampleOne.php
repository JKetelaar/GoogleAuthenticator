<?php

/*This example will check if the information, filled in by the user, is correct*/
require_once 'lib/authenticator/auth.php';

$code = "Generated Code Here";
$key = "Code From Google Authenticator Here";
$Login = new Login;
$Login->TFACheck($code, $key);
?>
