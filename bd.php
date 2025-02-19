<?php

function connectionBD() {
    // Connexion au serveur local (WAMP ou LAMP)
    $servernameLocal = "";          // Le nom du serveur de BD
    $usernameLocal = "";            // Le nom d'utilisateur
    $passwordLocalWamp = "";        // Le mot de passe WAMP
    $passwordLocalLamp = "";        // Le mot de passe LAMP
    $dbnameLocal = "";              // Le nom de la BD

    // Tentative de connexion avec le mot de passe WAMP
    $conn = new mysqli($servernameLocal, $usernameLocal, $passwordLocalWamp, $dbnameLocal);
    if ($conn->connect_error) {
        // Tentative de connexion avec le mot de passe LAMP
        $conn = new mysqli($servernameLocal, $usernameLocal, $passwordLocalLamp, $dbnameLocal);
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }
    }
    return $conn;
}