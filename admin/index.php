<?php 
 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="p-5">
    
        <h2 class="text-center">
            Welcome
        </h2>

        <div class="row p-5">
            <div class="col-6 p-5 offset-3">
                <h2 class="text-center">
                    Login Here
                </h2>
                <form action="login.php" method="post">
                    
                Email: 
                <input type="email" name="email" id="" class="form-control">
                Password: 
                <input type="password" name="password" id="" class="form-control">
                <input type="submit" value="Login" class="btn-danger btn float-right mt-3">
                </form>
            </div>
            
        </div>
</body>
</html>