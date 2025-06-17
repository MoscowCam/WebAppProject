<?php

$db_user = 'php_docker';    #database name or username? 
$db_pass = 'password';      #password
$db_name = 'php_docker';        #table name? 

$db = new PDO('mysql:host=db;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>