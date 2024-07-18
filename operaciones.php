<?php
session_start();

if (!isset($_SESSION['dice'])) {
    $_SESSION['dice'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['roll'])) {
        $numDice = intval($_POST['numDice']);
        $_SESSION['dice'] = [];
        for ($i = 0; $i < $numDice; $i++) {
            $_SESSION['dice'][] = rand(1, 6);
        }
    } elseif (isset($_POST['reset'])) {
        $_SESSION['dice'] = [];
    }
}

include 'index.php';
