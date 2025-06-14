


<?php 

$connect = mysqli_connect(
    'db', #service name 
    'php_docker', #username
    'password', #password
    'php_docker' #db name 


);

$table_name = "users"; #table name

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);



?>


