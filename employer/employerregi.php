<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here!</title>
</head>
<body>
    <div class="login-box">
        <div class="col-md-6 login-left">
           <h2 class="login">Register Here</h2>
           <form action="empregister.php" method="post">
            <div class="form-group">
                <label class="first-name"><b>First Name</b></label>
                <input name="firstname" type="text" placeholder="Enter your first name"  class="form-control" required>
             </div>
             <div class="form-group">
                <label class="last-name"><b>Last Name</b></label>
                <input name="lastname" type="text" placeholder="Enter your last name"  class="form-control" required>
             </div>
             <div class="form-group">
                <label class="user-name"><b>Username</b></label>
                <input name="username" type="text" placeholder="Enter your username"  class="form-control" required>
             </div>
              <div class="form-group">
                 <label class="username1"><b>Email</b></label>
                 <input name="email" type="text" placeholder="Enter your email"  class="form-control" required>
              </div>
              <div class="form-group">
                 <label><b>Password</b></label>
                 <input name="password" type="password" placeholder="Enter your password"  class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
           </form>
        </div>
     </div>
</body>
</html>