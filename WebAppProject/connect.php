
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Teacher Form</title>
    <link type="text/css" rel="stylesheet" href="../style.css"> 
</head>
<body>
    <header>
        <h1>New Teacher Registration</h1>
    </header>
    
    <section>
        <form action="connect.php" method="post">

        <label for="firstName">First Name</label>
        <input type="text" id="firstName"name="firstName">
        
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName">

        <label for=""></label>
        </form>
    </section>
    
</body>
</html>


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
?>
