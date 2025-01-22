<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/CSS/style-login.css">
</head>

<body>
    <div id="button-return">
        <a href="index.php" class="button-login">X</a>
    </div>
    <div id="background">
        <img src="/public/Images/logo-site.png" alt="logo-site">
    </div>
   
    <img id="icon-user" src="/public/Images/user.png" alt="icon user">
    <p id="p1">LOGIN</p>

    <div id="menu-login">
        <!--id-->
        <div id="login">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <!--password-->
        <div id="password">
            <input type="password" id="password-input" name="password" placeholder="Entrez votre mot de passe" required>
            <p id="forgot-password">Mot de passe oublié ?</p>
        </div>

        <!--button confirmation-->
        <div id="button-confirmation">
            <button type="submit">Se connecter</button>
        </div>
    </div>
    
      
</body>
</html>