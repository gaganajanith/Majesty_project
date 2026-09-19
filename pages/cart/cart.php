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
        <a href="/Majesty_project/pages/home/home.html"><img src="/Majesty_project/assets/images/majesty(1).png"
                alt="logo" width="120" height="40"></a>
        <nav class="nav_bar">
            <!-- search bar -->
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button><img src="/Majesty_project/assets/images/search_bar.png" alt="search" width="15px"
                        height="15px"></button>
            </div>
            <ul class="nav-links">

                <!--nav links-->
                <li><a href="/Majesty_project/pages/shop/mens/mens.html">MENS</a></li>
                <li><a href="/Majesty_project/pages/shop/womens/womens.html">WOMENS</a></li>
                <li><a href="/Majesty_project/pages/auth/sign_up.html">SIGNUP</a></li>
                <li><a href="/Majesty_project/pages/cart/cart.php"><img src="/Majesty_project/assets/images/Addw.png"
                            class="cart"></a></li>
            </ul>
        </nav>
    </header>

    <!--top banner-->
    <section class="cart-hero">
        <div class="cart-hero-overlay">
            <h1>Your Cart</h1>
            <p><b>Good choices. Now make them yours.</b></p>
        </div>
    </section>

    <div class="page_layout">

        <div class="cart_main">


            <?php
            if (empty($_SESSION['cart'])):
                ?>
                <center>
                    <br><br><br>
                    <h1>Cart is empty !!!</h1>
                    <br><br><br><br><br>
                    <a href="/Majesty_project/pages/home/home.html#shop_now"><button class="shop-btn">Shop Now</button></a>
                </center>
                <?php
            else:
                ?>


                <table cellpadding="10" class="table-1">


                    <?php
                    $grand = 0;
                    foreach ($_SESSION['cart'] as $item):
                        $total = $item['price'] * $item['qty'];
                        $grand += $total;
                        ?>

                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td align="right">LKR <?= $item['price'] ?></td>
                            <td align="center"><?= $item['qty'] ?></td>
                            <td align="right">LKR <?= $total ?></td>
                        </tr>

                    <?php endforeach; ?>

                    <tr>
                        <td colspan="3" align="right"><b><h3>Grand Total</h3></b></td>
                        <td align="right"><b><h3>LKR <?= $grand ?></h3></b></td>
                    </tr>


                </table>

                <br><br>
            <table class="checkout-table" , border=0>
                <tr>
                    <td colspan="3" align="center"></td>
                    <td align="right">
                        <ul>
                            <li class="checkout_btn"><a href="/Majesty_project/pages/auth/login.html"><b><p>CHECK OUT</p></b></a></li>
                        </ul>
                    </td>
                </tr>

            </table></ul>

            <?php endif; ?>

            


        </div>


        <div class="cart_sidebar">
            <ul>
                <br><br><br>
                <li><a href="/Majesty_project/pages/home/home.html#shop_now"> <b>Add items</b></a> </li>
                <li><a href="/Majesty_project/logic/logout.logic.php"><b>Logout</b> </a> </li>
                <li><a href="/Majesty_project/logic/reset_cart.logic.php"><b>Reset Cart</b></a></li>

            </ul>
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