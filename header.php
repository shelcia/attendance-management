<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <title>Header</title>
        <style>
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
     if(isset($_SESSION["idUsers"])){
       echo '<nav class="navbar navbar-expand-md bg-light navbar-light"><a class="navbar-brand" href="index.php"><img src="img/logo@2x.png"  width="auto" height="30px"></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="collapsibleNavbar"><ul class="navbar-nav"><li class="nav-item"><form action="includes/logout.inc.php"><button name="logout-btn" class="btn btn-primary"  type="submit">Logout</button></form></li></ul></div></nav>';
     }
     else{
      echo '<nav class="navbar navbar-expand-md bg-light navbar-light"><a class="navbar-brand" href="index.php"><img src="img/logo@2x.png" width="auto" height="30px" ></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="collapsibleNavbar"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li><li class="nav-item"><form action="includes/logout.inc.php"></form></li></ul></div></nav>';
    }
?>

    <div class="container p-2">
      <h3 class="text-center">Welcome to</h3>
      <h1 class="text-center">Attendance portal</h1>
    </div>
</body>
</html>
