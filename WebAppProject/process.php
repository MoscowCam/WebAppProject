<?php 
require_once('connect.php')
?>


<?php
    if(isset($_POST)){
        
        $firstName      = $_POST['firstName'];
        $lastName       = $_POST['lastName'];
        $email          = $_POST['email'];
        $phoneNumber    = $_POST['phoneNumber'];
        $password       = shal($_POST['password']);

        $query = "INSERT INTO users(firstname, lastname, email, phonenumber, password )
        VALUES(?,?,?,?,?)";
        $stmtinsert = $connect->prepare($query);
        $result = $stmtinsert->execute([$firstName, $lastName, $email, $phoneNumber, $password]);
        if($result){
            echo 'Successfully saved';
        } else{
            echo 'There were some errors!';
        }
        


}else{
    echo 'No data';
}
    
    
    
    
    
    
