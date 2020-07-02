<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" />
        <title>Signup</title>
</head>
<body>
        <?php
                require "header.php";
         ?>
        <div class="container text-center">
        <form action="includes/signup.inc.php" method="POST">
        <div class="form-group">
              <label for="uname">Username:</label>
              <input
                type="text"
                class="form-control"
                placeholder="Enter username"
                name="usid"
              />
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input
                type="email"
                class="form-control"
                placeholder="Enter email"
                name="emailid"
              />
            </div>
            <div class="form-group">
              <label for="pwd1">Password:</label>
              <input
                type="password"
                class="form-control"
                placeholder="Enter password"
                name="pwdid1"
              />
            </div>
            <div class="form-group">
              <label for="pwd2">Re-enter Password:</label>
              <input
                type="password"
                class="form-control"
                placeholder="Re-enter password"
                name="pwdid2"
              />
            </div>
            <div class="text-center">
              <button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
            </div>
          </form>
        </div>
        <?php
                require "footer.php";
        ?>
</body>
</html>
