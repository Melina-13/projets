<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include_once 'view/home.php';
        break;
    case 'about_me':
        include_once 'view/about_me.php';
        break;
    case 'projet':
        include_once 'view/projet.php';
        break;
    case 'skills':
        include_once 'view/skills.php';
        break;
    default:
        http_response_code(404);
        echo '<h1>404 - Page non trouvée</h1>';
        break;
}
