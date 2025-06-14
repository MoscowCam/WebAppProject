<?php 
require_once('connect.php');
?>


<?php


    if(isset($_POST)){
        
        $firstname      = $_POST['firstName'];
        $lastname       = $_POST['lastName'];
        $email          = $_POST['email'];
        $phonenumber    = $_POST['phoneNumber'];
        $password       = shal($_POST['password']);

            $query = "INSERT INTO users(firstname, lastname, email, phonenumber, password )
            VALUES(?,?,?,?,?)";
            $stmtinsert = $connect->prepare($query);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
            if($result){
                echo 'Successfully saved';
            } else{
                echo 'There were some errors!';
            }
        


}else{
    echo 'No data';
}
    
    
    
    
    
    
