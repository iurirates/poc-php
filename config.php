<?php		
/** Name of Database */		
define('DB_NAME', 'wda_crud');				

/** Name of User of Database in MySQL */		
define('DB_USER', 'root');				

/** Password of User of Database in MySQL */		
define('DB_PASSWORD', '');				

/** Name of host of MySQL */		
define('DB_HOST', 'localhost');				

/** Absolute Path of System **/		
if ( !defined('ABSPATH') )			
define('ABSPATH', dirname(__FILE__) . '/');					

/** Path of System on Server **/		
if ( !defined('BASEURL') )			
define('BASEURL', '/poc-php/');					

/** Path of Database File **/		
if ( !defined('DBAPI') )			
define('DBAPI', ABSPATH . 'inc/database.php');

/** Path of templates of header and footer  **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');