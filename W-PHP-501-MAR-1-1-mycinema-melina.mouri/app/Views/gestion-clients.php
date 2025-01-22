<?php
include '../Models/db.php'; // Si ton script PHP est dans un sous-dossier

// Inclure la connexion à la base de données

// Récupérer les clients depuis la base de données
$sql = "SELECT * FROM user"; // Remplacez "user" par le nom exact de votre table
$stmt = $pdo->prepare($sql);
if ($stmt->execute()) {
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Si la requête échoue, affichez l'erreur
    echo "Erreur lors de l'exécution de la requête.";
    print_r($stmt->errorInfo());
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestions clients</title>
    <link rel="stylesheet" href="/public/CSS/style-gestion-clients.css">
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
            <img src="/public/Images/gestion-film.png" alt="logo film">
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
        
        <div class="table">

            <tbody>
                <?php if (empty($clients)): ?>
                    <tr>
                        <td colspan="9">Aucun client trouvé.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($clients as $client): ?>
                        <tr>
                            <td><?= htmlspecialchars($client['id']); ?></td>
                            <td><?= htmlspecialchars($client['firstname']); ?></td>
                            <td><?= htmlspecialchars($client['lastname']); ?></td>
                            <td><?= htmlspecialchars($client['birthdate']); ?></td>
                            <td><?= htmlspecialchars($client['email']); ?></td>
                            <td><?= htmlspecialchars($client['address']); ?></td>
                            <td><?= htmlspecialchars($client['zipcode']); ?></td>
                            <td><?= htmlspecialchars($client['city']); ?></td>
                            <td><?= htmlspecialchars($client['country']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>


        </div>






    </main>
    <footer>
        <hr>
    </footer>
    
</body>
</html>