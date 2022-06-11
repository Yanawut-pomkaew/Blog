<?php 
    session_start();
    include('db.php'); 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>

    <div class="container p-3 my-3 border text-center jumbotron" style="background-color:white;">
    <form action="login_db.php" method="POST">
        <label>Username</label>
        <input name="username" style="width:300px;height:25px" />
        <br><br>
        <label>Password</label>
        <input name="password" type="Password" style="width:300px;height:25px" />
        <br><br><br><br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="login" >Login</button>
    </form>
    </div>
</body>
</html>