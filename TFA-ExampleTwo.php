<?php
/*This example will generate a code, which can be used later by the user with the Google Authenticator */
require_once 'lib/authenticator/auth.php';

$Login = new Login;
$Login->TFAGenerate();

