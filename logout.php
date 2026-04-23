<?php
session_start();

// Distrugge tutte le variabili di sessione
$_SESSION = array();

// Distrugge la sessione
session_destroy();

// (opzionale) cancella il cookie di sessione
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

echo "Logout effettuato";
?>