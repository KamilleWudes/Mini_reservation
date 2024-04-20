<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/bootstrap/dist/css/bootstrap.css ">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/app.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form-block">
        <h1>Connexion</h1>
        <?php if(isset($alert)){ echo alertMessage($alert);}?>  
        <!-- echo password_hash('admin100WUDES',PASSWORD_BCRYPT); -->
        <form method="post" action=""><br><br>
            <input type="text" name="username"autocomplete="off" placeholder="Username" class="form form-control"><br><br>
            <input type="password" name="password" autocomplete="off" placeholder="Mot de passe" class="form form-control"><br><br><br>
            
            <input type="submit" name="submit" value="connexion" class="btn btn-primary btn-block">


    </div>
    
</body>
</html>