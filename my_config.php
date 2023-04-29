<?php
/*
 * --------------------------------------------------------------------
 * LOAD THE CUSTOM FILE CONFIGURATIONS
 * --------------------------------------------------------------------
 *
 */
// configure enviroment / set true if it is in live server
$PRODUCTION = false;
define('PRODUCTION', $PRODUCTION);

$BASE_URL = (PRODUCTION) ? : "http://localhost/blood_bank";

define('BASE_URL', $BASE_URL);



/**
 * Configuration for database
 */
$HOSTNAME = (PRODUCTION) ? "" : "us-cdbr-east-06.cleardb.net";
$USERNAME = (PRODUCTION) ? "" : "bd8f3d5184cab8";
$PASSWORD = (PRODUCTION) ? "" : "1ed301c5";
$DATABASE = (PRODUCTION) ? "" : "heroku_1ae4648204648de";
$PREFIX   = (PRODUCTION) ? "" : "bb_";

define('HOSTNAME', $HOSTNAME);
define('USERNAME', $USERNAME);
define('PASSWORD', $PASSWORD);
define('DATABASE', $DATABASE);
define('PREFIX'  , $PREFIX);

define('MAINTENANCE_MODE', false);
define('ENCRYPTION_KEY', '');

define('EMAIL_API', '');


?>