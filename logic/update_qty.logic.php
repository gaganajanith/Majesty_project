<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'], $_POST['action'])) {
    $key = $_POST['key'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$key])) {

        if ($action === 'increase') {
            $_SESSION['cart'][$key]['qty']++;
        }

        if ($action === 'decrease') {
            $_SESSION['cart'][$key]['qty']--;

            // remove item entirely if qty drops to 0
            if ($_SESSION['cart'][$key]['qty'] <= 0) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

header('Location: /Majesty_project/pages/cart/cart.php');
exit;