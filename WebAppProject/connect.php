<?php 

$connect = mysqli_connect(
    'db', #service name 
    'php_docker', #username
    'password', #password
    'php_docker' #db table 


);

$table_name = "tbl_teachers";

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