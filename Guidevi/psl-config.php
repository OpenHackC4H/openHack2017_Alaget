<?php
define("HOST", "aay596xc1vvpft.cpadrn3dns85.eu-central-1.rds.amazonaws.com:3306"); 			// The host you want to connect to. 
define("USER", "admin"); 			// The database username. 
define("PASSWORD", "burgers123"); 	// The database password. 
define("DATABASE", "openHack");             // The database name.

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

/**
 * Is this a secure connection?  The default is FALSE, but the use of an
 * HTTPS connection for logging in is recommended.
 * 
 * If you are using an HTTPS connection, change this to TRUE
 */
define("SECURE", FALSE);    // For development purposes only!!!!
?>
