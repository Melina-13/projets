<?php
include 'db.php'; // Inclure la connexion à la base de données

// Récupérer les salles depuis la base de données
$sql = "SELECT * FROM room"; // Remplacez "salles" par le nom exact de votre table
$stmt = $pdo->prepare($sql);
$stmt->execute();
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestions salles</title>
    <link rel="stylesheet" href="/public/CSS/style-gestion-salles.css">
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

        <div class="logo-gestions-salles">
            <img src="/public/Images/salles.png" alt="logo film">
            <h3>Gestions salles</h3>
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
        

        <div class="table">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Nom</th>
                        <th>Etage</th>
                        <th>Capacité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($salles as $salle): ?>
                        <tr>
                            <td><?= htmlspecialchars($salle['id']); ?></td>
                            <td><?= htmlspecialchars($salle['number']); ?></td>
                            <td><?= htmlspecialchars($salle['name']); ?></td>
                            <td><?= htmlspecialchars($salle['floor']); ?></td>
                            <td><?= htmlspecialchars($salle['seats']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>
    <footer>
        <hr>
    </footer>
    
</body>
</html>