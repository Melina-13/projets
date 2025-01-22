<?php
include 'db.php'; // Connexion à la base

// Récupérer toutes les séances
$sql = "
SELECT 
    ms.id AS seance_id,
    m.title AS titre_film,
    m.director AS realisateur,
    m.release_date AS date_sortie,
    m.duration AS duree,
    r.name AS salle_projection,
    ms.date_begin AS date_seance
FROM 
    movie_schedule ms
JOIN 
    movie m ON ms.id_movie = m.id
JOIN 
    room r ON ms.id_room = r.id
ORDER BY 
    ms.date_begin ASC
";
$stmt = $pdo->query($sql);
$seances = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séances</title>
    <link rel="stylesheet" href="/public/CSS/style-sessions.css">
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

        <div class="logo-seance">
            <img src="/public/Images/movie.png" alt="logo film">
            <h3>Séances</h3>
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
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre du film</th>
                        <th>Réalisateur</th>
                        <th>Date de sortie</th>
                        <th>Durée</th>
                        <th>Salle</th>
                        <th>Date de séance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($seances as $seance): ?>
                        <tr>
                            <td><?= htmlspecialchars($seance['seance_id']) ?></td>
                            <td><?= htmlspecialchars($seance['titre_film']) ?></td>
                            <td><?= htmlspecialchars($seance['realisateur']) ?></td>
                            <td><?= htmlspecialchars($seance['date_sortie']) ?></td>
                            <td><?= htmlspecialchars($seance['duree']) ?> min</td>
                            <td><?= htmlspecialchars($seance['salle_projection']) ?></td>
                            <td><?= htmlspecialchars($seance['date_seance']) ?></td>
                            <td>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="delete_id" value="<?= $seance['seance_id'] ?>">
                                    <button type="submit">Supprimer</button>
                                </form>
                                <form method="get" action="modifier_seance.php" style="display:inline;">
                                    <input type="hidden" name="edit_id" value="<?= $seance['seance_id'] ?>">
                                    <button type="submit">Modifier</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Formulaire pour ajouter une séance -->
            <h2>Ajouter une nouvelle séance</h2>
            <form method="post" action="ajouter_seance.php">
                <select name="id_movie" required>
                    <option value="" disabled selected>Choisissez un film</option>
                    <?php foreach ($films as $film): ?>
                        <option value="<?= $film['id'] ?>"><?= htmlspecialchars($film['title']) ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="id_room" required>
                    <option value="" disabled selected>Choisissez une salle</option>
                    <?php foreach ($salles as $salle): ?>
                        <option value="<?= $salle['id'] ?>"><?= htmlspecialchars($salle['name']) ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="datetime-local" name="date_begin" required>
                <button type="submit">Ajouter</button>
            </form>
        </div>




    </main>
    <footer>
        <hr>
    </footer>
    
</body>
</html>