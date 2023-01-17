<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Account Signin</title>
  </head>
<body>
    <div class="parent">
        <!-- ===== SHOP LOGO ===== -->
        <div class="logo">
            <div class="img">
                <div class="product-image"></div>
                <img src="assets/images/Logo.png"/>
            </div>  
        </div>

        <!-- ===== FORM GROUP ===== -->
        <div class="container">
            <div class="form-container">
                <div class="header">
                    <h2>Welcome, <br> Enter your account! <br> <span>& Tech it inside</span></h2>
                </div>
                
                <form id="user_signin" action="includes/authentication.inc.php" method="post">
                    <div class="form-control">
                        <input class="input" id="emailAdd" name="emailAdd" type="email" placeholder=" " autocomplete="off"/>
                        <div class="space-title"></div>
                        <label for="emailAdd" class="placeholder"><i class='fas fa-user-alt'></i> Email Add</label>
                    </div>
                    
                    <div class="form-control">
                        <input class="input" id="passWord" name="passWord" type="password" placeholder=" " autocomplete="off"/>
                        <div class="space-title"></div>
                        <label for="passWord" class="placeholder"><i class='fas fa-key'></i> Password</label>
                    </div>
                                        
                    <div class="login-container">                    
                        <br/>
                        <input type="Submit" name="submit" id="submit">
                        <a href="signup.php">Create an Account? Sign Up now!</a>

                        <!-- ===== PHP ERROR HANDLERS ===== -->
                        <?php 
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            if (strpos($fullUrl, "empty-input") == true) {
                                echo " <br/> 
                                <span class=\"msg\">Please fill in all fields</span>";
                                exit();
                            } 
                            else if (strpos($fullUrl, "no-data-found") == true) {
                                echo " <br/> 
                                <span class=\"msg\">Incorrect Email or Password</span>";
                                exit();
                            }
                        ?>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>