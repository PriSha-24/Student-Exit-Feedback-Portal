<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Student Login</title>
    <link rel="stylesheet" href="styles1.css" type="text/css"/>
  </head>

  <body>
    <div class="login-form">
      <h1>STUDENT LOGIN</h1>
      <h2>Login to your account</h2>
      <form action="php/checkSlogin.php" method="POST">
        <label>
          Email
          <input type="email" id="email" placeholder="email" name="email" />
        </label>
        <br /><br />
        <label>
          Password
          <input
            type="password"
            id="password"
            placeholder="password"
            name="password"
          />
        </label>
        <br /><br />
        <div class="submit-form">
          <input type="submit" id="login" name="login" value="Login" />
        </div>
      </form>
    </div>
  
   <button id="backToHomeButton">Home</button>

    <script>
      document.getElementById("backToHomeButton").addEventListener("click", function() {
        window.location.href = "index.php"; // Replace with your homepage URL.
      });
    </script>
  </body>
</html>
