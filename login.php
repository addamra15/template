<?php 
    if( isset($_POST["submit"])     )   {
        if( $_POST["username"] == "admin" && $_POST["password"]     ==  "admin")      {
            header ("Location: index.html");
            exit;
        }   else    {
            $error = true; 
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <?php if( isset($error)   )   :   ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
      <?php endif; ?>
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>