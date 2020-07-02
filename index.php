<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Attendance Portal</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
      h1 {
        text-transform: uppercase;
      }
      body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body>
  <?php
  require "header.php";
  ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 p-2 text-center">
          An example of login system built using php for the application of attendance management
        </div>
        <div class="col-sm-6 p-2">
          <form action="includes/login.inc.php" method="POST">
            <div class="form-group">
              <label for="email">Email address/Username:</label>
              <input
                type="text"
                class="form-control"
                placeholder="Enter email/username"
                name="emailid"
              />
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input
                type="password"
                class="form-control"
                placeholder="Enter password"
                name="pwdid"
              />
            </div>
            <div class="text-center">
              <button name="login-submit" type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class ="container text-center">
      <?php
     if(isset($_SESSION["idUsers"])){
       echo "<p>You are logged in</p>";
     }
     else{
      echo "<p>You are logged out</p>";
     }
      ?>
    </div>
    <?php
        require "footer.php";
      ?>
  </body>
</html>
