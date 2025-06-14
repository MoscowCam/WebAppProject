<?php 
require_once('connect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registration</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <?php

    ?>
    

    <header>
        <h1>New Staff Member Registration</h1>
    </header>
    
    <section>
        <form action="index.php" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration Form:</h1>
                        <p>Fill out the form with correct information.</p>
                        <hr class="mb-3">

                        <label for="firstName"><b>First Name:</b></label>
                        <input class="form-control" type="text" id="firstName"name="firstName" required>
                        
                        <label for="lastName"><b>Last Name:</b></label>
                        <input class="form-control" type="text" id="lastName" name="lastName" required>

                        <label for="email"><b>Email:</b></label>
                        <input class="form-control" type="email" id="email" name="email" required>

                        <label for="phoneNumber"><b>Phone number:</b></label>
                        <input class="form-control" type="text" id="phoneNumber" name="phoneNumber" required>

                        <label for="password"><b>Password:</b></label>
                        <input class="form-control" type="password" id="password" name="password" required>
                        
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign up">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.22.0/dist/sweetalert2.all.min.js "></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){

                var valid = this.form.checkValidity();

                if(valid){


                    var firstname    = $('#firstName').val();
                    var lastname     = $('#lastName').val();
                    var email        = $('#email').val();
                    var phonenumber  = $('#phoneNumber').val();
                    var password     = $('#password').val();


                        e.preventDefault();

                        $.ajax({
                            type: 'POST',
                            url: './process.php'
                            data:   {firstname: firstname, lastname: lastname, 
                                    email: email, phonenumber: phonenumber,
                                    password: password},
                            success: function(data){
                                Swal.fire({
                                    'title': 'Successful',
                                    'text' : 'You registered successfully!',
                                    'type' : 'success'
                                    })
                            },
                            error: function(data){
                                Swal.fire({
                                    'title': 'Error',
                                    'text' : 'There were errors during the registration process',
                                    'type' : 'error'
                                    })
                            }
                        });

                    
                }else{
                    
                }
                


               

            });
        });  
        
    </script>


</body>
</html>