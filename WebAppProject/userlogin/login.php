<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIS Admin Login</title>
    <link rel="stylesheet" href="../userlogin/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/03386e2b32.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="./img/logo.png" class="brand_logo" alt="oops">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control input_user" required>
                        </div>
                         <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rememberme" class="custom-control-input" 
                                id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="d-flex justify-content-center mb-3 login-container">
                    <button type="button" name="button" id="login" class="btn login_btn">Login</button>
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="../index.php" class="ml-2">Sign up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="">Forgot your password?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script 
        src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
</body>
</html>