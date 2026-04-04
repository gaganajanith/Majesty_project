<?php
session_start();
unset($_SESSION['cart']);
echo 
    "<script>
        alert('Cart cleared successfully!');
        window.location.href = '/Majesty_project/pages/cart/cart.php';
    </script>";