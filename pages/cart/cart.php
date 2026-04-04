<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty | Cart</title>
        
    <link rel="stylesheet" href="/Majesty_project/pages/cart/cart.css">
</head>

<body>

  <!--navigation bar-->
    <header class="navbar">
        <a href="/Majesty_project/pages/home/home.html"><img src="/Majesty_project/assets/images/majesty(1).png" alt="logo" width="120" height="40"></a>
    </header>

    <div class="page_layout">
     
    <div class="cart_sidebar">
        <ul>
            <li><a href="/Majesty_project/pages/home/home.html#shop_now"> Add more items</a> </li>
            <li><a href="/Majesty_project/logic/logout.logic.php">Logout </a> </li>
            <li><a href="/Majesty_project/logic/reset_cart.logic.php">Reset Cart</a></li>
            <li class="checkout_btn"><a href="/Majesty_project/pages/auth/login.html">CHECK OUT</a></li>
        </ul>
    </div>

<div class="cart_main">


<?php
    if(empty($_SESSION['cart'])):
?>
    <center>
    <h1>Cart is empty !!!</h1>
    <br><br><br><br><br>
    <a href="/Majesty_project/pages/home/home.html#shop_now"><button class="shop-btn">Shop Now</button></a>
    </center>
<?php 
    else: 
?>


<table border="1" cellpadding="10">

    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
    </tr>

    <?php 
        $grand = 0;
        foreach ($_SESSION['cart'] as $item):
        $total = $item['price']*$item['qty'];
        $grand += $total;
    ?>

    <tr>
        <td><?= $item['name'] ?></td>
        <td align="right">LKR  <?= $item['price'] ?></td>
        <td align="center"><?= $item['qty'] ?></td>
        <td align="right">LKR  <?= $total ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3" align="center"><b>Grand Total</b></td>
        <td align="right"><b>LKR  <?= $grand ?></b></td>
    </tr>

</table>

<?php endif; ?>

</div>

</div>


    
</div>

  <!-- Footer -->

    <footer class="footer">
        <div class="footer-column">
            <!--slogun-->
            <p class="slogun">match your vibe, your grind, your identity.
                <br><br>Wear your power.
                <br>Wear MAJESTY.
            </p>

            <!--social media links-->
            <img src="/Majesty_project/assets/images/insta.png" alt="instergram" height="30px" width="30px">
            <img src="/Majesty_project/assets/images/fb.png" alt="facebook" height="30px" width="30px">
            <img src="/Majesty_project/assets/images/x.png" alt="x" height="30px" width="30px">
        </div>

        <div class="footer-column">
            <ul>
                <li><a href="/Majesty_project/pages/general/contact.html">Contact</a></li>
                <li><a href="/Majesty_project/pages/general/refund_policy.html">Refund Policy</a></li>
            </ul>
            <br>
            <pre>&copy; 2026 | Majesty | All Rights Reserved |</pre>
        </div>
    </footer>   
</body>
</html>