<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="login.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
   <title>Sign In!</title>
</head>
<body>
   <div class="headertxt">
      You are one step behind from getting your dream job!
   </div>
   
     <div class="login-box">
      
         <div class="col-md-6 login-left">
            <h2 class="login">Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label class="last-name"><b>Username</b></label>
                <input name="username" type="text" placeholder="Enter your Username"  class="form-control" required>
             </div>
               <div class="form-group">
                  <label class="username1">Email</label>
                  <input type="text" name="email" placeholder="Enter Your E-mail" class="form-control" required>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="sign-up">Don't have a account? <a class="register" href="userregi.php">Register</a> Here</p>
         </div>
         
         
         <!--<div class="col-md-6 login-right">
            <h2 class="login">Register Here</h2>
            <form action="registration.php" method="post">
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user" class="form-control" required>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>
               </div>
               <button type="submit" class="btn btn-primary">Register</button>
            </form>
         </div>-->
         </div>
      
   
          
     
</body>
</html>