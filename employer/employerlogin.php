<?php 

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
</head>
<body>
    
        <div class="login-box">
            <div class="col-md-6 login-left">
               <h2 class="login">Login Here</h2>
               <form action="empvalidate.php" method="post">
               <div class="form-group">
                     <label class="username1"><b>Username</b></label>
                     <input type="text" placeholder="Enter your username" name="username" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label class="username1"><b>Email</b></label>
                     <input type="text" placeholder="Enter your email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label><b>Password</b></label>
                     <input type="password" placeholder="Enter your password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
               </form>
               <p class="sign-up">Don't have a account? <a class="register" href="employerregi.php">Register</a> Here</p>
            </div>
            
            
         </div>
         
      
</body>
</html>