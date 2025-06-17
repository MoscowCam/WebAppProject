<?php
require_once('config.php');

echo 'hello';

$sql = "SELECT * FROM users";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([]);

if($result){
    echo 'Success';
}else{
    echo 'There were errors while connecting to database';
}