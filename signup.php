<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>Account Signup</title>
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
          <h2>Welcome, <br> Create your account! <br> <span>& Tech it inside</span></h2>
        </div>

        <span id="message" class="msg"></span>
        <form id="user_signup">
          <div class="form-control">
            <input class="input" id="fullName" name="fullName" type="text" placeholder=" " autocomplete="off"/>
            <div class="space-title"></div>
            <label for="fullName" class="placeholder"><i class='fas fa-user-alt'></i> Full Name</label>
            <span id="fullName_error" class="errormsg"></span>
          </div>

          <div class="form-control">
            <input class="input" id="homeAddress" name="homeAddress" type="text" placeholder=" " autocomplete="off"/>
            <div class="space-title"></div>
            <label for="homeAddress" class="placeholder"><i class='fas fa-user-alt'></i> Home Add</label>
            <span id="homeAddress_error" class="errormsg"></span>
          </div> 

          <div class="form-control">
            <input class="input" id="emailAdd" name="emailAdd" type="email" placeholder=" " autocomplete="off"/>
            <div class="space-title"></div>
            <label for="emailAdd" class="placeholder"><i class="fa fa-envelope"></i> Email Add</label>
            <span id="emailAdd_error" class="errormsg"></span>
          </div>
              
          <div class="form-control">
            <input class="input" id="passWord" name="passWord" type="password" placeholder=" " autocomplete="off"/>
            <div class="space-title"></div>
            <label for="passWord" class="placeholder"><i class="fas fa-key"></i> Password</label>
            <span id="passWord_error" class="errormsg"></span>
          </div>

          <div class="form-control">
            <input class="input" id="passWord2" name="passWord2" type="password" placeholder=" " autocomplete="off"/>
            <div class="space-title conpass"></div>
            <label for="passWord2" class="placeholder"><i class="fas fa-key"></i> Confirm Password</label>
            <span id="passWord2_error" class="errormsg"></span>
          </div>
              
          <div class="login-container">
            <br/>
            <button type="button" name="submit" id="submit" onclick="signup_data(); return false;">Register / Signup</button>
            <a href="login.php">Have an Account? Sign in now!</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="js/ajax-signup.js"></script>
</body>
</html>