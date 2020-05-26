<?php
include 'includes/register.inc.php';
include 'includes/login.inc.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="menu-header-container">
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
                            <li class="current"><a href="menu.php">MENU</a></li>
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
            <div class="menu-message-container"> 
                <p>LAS MEJORES DE LA CIUDAD</p>
                <h1>Menú</h1>
            </div>
        </div>
        
        <div class="menu-container">
            <div class="zigzag-triangle2"></div>
            <div class="menu-content">
                <h1>Elija su Hamburguesa</h1>
                
                <div class="menu-row">
                    <div class="hamburger-pic">
                      <img src="images/burguer1.png" alt="">
                      <p>Mixta</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer3.png" alt="">
                      <p>Carne</p>
                      <h2>$11.90</h2>
                    </div>
                    <div class="hamburger-pic">
                      <img src="images/burguer2.png" alt="">
                      <p>Pollo</p>
                      <h2>$11.90</h2>
                    </div>
                  </div>

                  <div class="menu-list-row">
                    <div class="menu-list-column">
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/burguer2.2.png" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa18.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Crane</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa13.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>De todito</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa10.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Crane</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$12</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-list-column">
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa20.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Mixta</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa16.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa12.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Mixta</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$20</p>
                            </div>
                        </div>
                        <div class="item-row">
                            <div class="menu-list-item">
                                <img class="hamburger-icon" src="images/hamburguesa4.jpg" alt="">
                            </div>
                            <div class="menu-list-name">
                                <p>Pollo</p>
                            </div>
                            <div class="menu-list-price">
                                <p>$6</p>
                            </div>
                        </div>

                    </div>
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