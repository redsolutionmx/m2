<?php
require_once 'database.php';

/********llenado de inputs fijos *******/
$tipo = "select * from operaciones";
$query_tipo = mysql_query($tipo, $locahost);
$result_tipo = mysql_fetch_assoc($query_tipo);