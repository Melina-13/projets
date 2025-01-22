
<?php include 'db.php'; ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès admin</title>
    <link rel="stylesheet" href="/public/CSS/style-acces-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/public/CSS/style-layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        
        <div class="logo">
            <img src="/public/Images/logo-site.png" alt="Logo Cinema">
        </div>

        <div class="logo-gestions-clients">
            <img src="/public/Images/admin.png" alt="logo admin">
            <h3>Gestions clients</h3>
        </div>

        <div class="login">
            <img src="/public/Images/user.png" alt="logo user">
            <a href="login.php" class="button-login">Identifiez-vous</a>
        </div>
        <hr>
    </header>
    <main>
        <div id="button-return">
            <a href="index.php" class="button-login">X</a>
        </div>
       <div id="buttons">
            <!--Button filtres -->
            <div id="filtre-button">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filtres</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            
            <!--Button search-->
            <div class="search-container">
                <input type="text" placeholder="Rechercher..." class="search-input">
                <button class="search-button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        
    </main>
    <footer>
        <hr>
    </footer>
    
</body>
</html>
