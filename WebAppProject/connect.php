<?php 

$connect = mysqli_connect(
    'db', #service name 
    'php_docker', #username
    'password', #password
    'php_docker' #db name 


);

$table_name = "tbl_teachers"; #table name

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['id']."</p>";
    echo "<p>".$i['firstName']."</p>";
    echo "<p>".$i['lastName']."</p>";
    echo "<p>".$i['date']."</p>";
    echo "<hr>";
}

#hello masha 