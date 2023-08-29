<?php
    session_start();
    unset($_SESSION["firstname"]);
    session_destroy();
    header("Location: main.php");
    exit;