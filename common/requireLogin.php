<?php
    session_start();

    $requiredLoginUrls = array("/admin");
    $currentUrl = $_SERVER['REQUEST_URI'];

    for ($i=0; $i<count($requiredLoginUrls); $i++) {
        if (str_contains($currentUrl, $requiredLoginUrls[$i])) {
            if (!isset($_SESSION['ID'])) {
                header('Location: /login.php');
                break;
            }
        }
    }
?>