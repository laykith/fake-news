<?php

declare(strict_types=1);

session_start();

if (!$_SESSION['loggedIn']) {
    header('location: /login.php');
}

//View

require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/components/adminpanel.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
