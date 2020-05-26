<?php
include 'includes/register.inc.php';
include 'includes/login.inc.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="payment-header-container">
            <header>
                <div class="container container-flex">
                    <div id="logo">
                        <img src="images/5.png" alt="">
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="home.php">INICIO</a></li>
                            <hr>
                            <li><a href="aboutUs.php">SOBRE NOSOTROS</a></li>
                            <hr>
                            <li><a href="menu.php">MENU</a></li>
                            <hr>
                            <li><a href="http://npk8851.uta.cloud/blog/">BLOG</a></li>
                            <hr>
                            <li><a href="contact.php">CONTACTO</a></li>
                            <hr>
                            <?php if(!isset($_SESSION['email'])):?>
                            <li><a id="register-modal-btn">REGISTRO</a></li>
                            <hr>
                            <li><a id="login-modal-btn">INICIAR SESION</a></li>
                            <hr>
                            <?php endif; ?>	
                            <?php if(isset($_SESSION['email'])):?>
                            <li><a href="logout.php">LOGOUT</a></li>
                            <hr>
                            <?php if($_SESSION['acc_type']==="admin"):?>
                                <li><a href="admin_cart.php"><i class="fa fa-shopping-cart" style="font-size: 30px;"></i></a></li>
                            <?php endif; ?>	
                            <?php if($_SESSION['acc_type']==="nonadmin"):?>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size: 30px;"></i></a></li>
                            <?php endif; ?>
                            <?php endif; ?>	
                        </ul>
                    </nav>
                </div>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </header>
            <div class="zigzag-triangle"></div>
            <div class="payment-message-container"> 
                <p>Complete your order</p>
                <h1>Payment page</h1>
            </div>
        </div>
        
        <div class="payment-container">
            <div class="zigzag-triangle2"></div>
            <div class="payment-content">
                <div class="register-header">
                    <div>
                        <img class="burger-img spanning" src="images/Burguer.png"  alt="">
                        <h1 class="spanning">Payment Information
                        </h1>
                    </div>
                </div>
                <div>
                    <form action="#" method="post">
                        <hr>
                        <div class="payment-div-content">
                            <label for="uname">
                                <p>Name on the Card</p>
                            </label>
                            <input class="payment-field" type="text" name="uname" required placeholder="Name">
                            <label for="psw">
                                <p>Credit Card Number</p>
                            </label>
                            <input class="payment-field" type="password" name="psw" required placeholder="1111-2222-3333-4444">
                            <label for="uname">
                                <p>Expiry Date (MM/YY)</p>
                            </label>
                            <input class="payment-field" type="text" name="uname" required placeholder="MM/YY">
                            <label for="psw">
                                <p>CVV</p>
                            </label>
                            <input class="payment-field" type="password" name="psw" required placeholder="CVV">
                        </div>
                        <hr>
                        <div >
                            <button type="submit" class="login-button">Place Order</button>
                        </div>
                    </form>
    
                </div>
            
            </div>
        </div>


        <div class="footer-container">
            <footer>
                <div class="zigzag-triangle3"></div>
                <div class="container">
                    <div id="footer-logo">
                        <img src="images/5.png" alt="">
                    </div> 
                    <div class="footer-content">
                        <p class="footer-key">Habla a:</p>
                        <p class="footer-value">Av. Inetercomunal, sectro la Mora, calle 8</p>
                    </div>
                    <div class="footer-content">
                        <p class="footer-key">Telefono:</p>
                        <p class="footer-value">+58 251 261 00 01</p>
                    </div>
                    <div class="footer-content">
                        <p class="footer-key">Correo:</p>
                        <p class="footer-value">yourmail@gmail.com</p>
                    </div>
                    <div class="footer-content">
                        <a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest"></a>
                        <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://dribbble.com/" target="_blank" class="fa fa-dribbble"></a>
                        <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                        <a href="https://vimeo.com/" target="_blank" class="fa fa-vimeo"></a>
                    </div>
                    <div class="footer-content">
                        <p>Copyright &#169;2020 Todos los derechos reservados | Este sitio esta hecho con por<i class='fa fa-heart'></i>DiazApps</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php include 'register.php'; ?>
    <?php include 'login.php'; ?>
    

    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>