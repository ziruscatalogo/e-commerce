<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="text">
            Sign up
         </div>
         <form method= "POST" action="adduser.php">
            <div class="field">
               <input type="email" name="Email" required>
               <span class="fas fa-user"></span>
               <label>Email</label>
            </div>
            <div class="field">
               <input type="password" name="Password"  required>
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <button>Sign in</button>
         </form>
      </div>
   </body>
</html>