<?php
session_start();
if (isset($_GET['suppression_compte'])){
if (!isset($_SESSION['id'] ) || empty($_SESSION['id'])) {
} else {
    require_once "Controller/Suppression_Controller.php";
}
}

// Vérifie si on demande la déconnexion
if (isset($_GET['logout'] )) {
    // 1. Supprimer toutes les variables de session
    $_SESSION = [];

    // 2. Supprimer le cookie de session si existant
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // 3. Détruire la session
    session_destroy();

    // 4. Supprimer d'autres cookies éventuels (si tu en utilises)
    setcookie("autre_cookie", "", time() - 3600); // exemple

    // 5. Redirection vers la page d'accueil ou de login
    header("Location: index.php");
    exit();
}


echo '<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="./Controller/CSS_Controller.php">
</head>';

require_once "./Controller/Controller.php";



?>
<script src="Controller/JS_Controller.php"></script>

