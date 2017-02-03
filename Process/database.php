<?php
$hostname_localhost = 'consulting.redsolution-mx.com';   
$database_localhost = 'm2br_catalogo';
$username = 'm2public';
$password = 'ypa4uvejy';
error_reporting(0);
$localhost = mysql_connect($hostname_localhost, $username, $password) or trigger_error(mysqli_error(), E_USER_ERROR);
mysql_query("SET NAMES 'utf8'");
$coneccion = mysql_select_db($database_localhost, $localhost); 
error_reporting(0);
