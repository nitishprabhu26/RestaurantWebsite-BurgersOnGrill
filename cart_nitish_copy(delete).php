<?php
include 'includes/register.inc.php';
include 'includes/login.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div  class="wrapper">
        <div class="cart-header-container">
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
            <div class="cart-message-container">
                <p>Add items to your cart</p>
                <h1>My Cart</h1>
            </div>
        </div>

        <div class="cart-container">
            <div class="zigzag-triangle2"></div>
            <div class="cart-content">
                <div class="register-header">
                    <div>
                        <img class="burger-img spanning" src="images/Burguer.png" alt="">
                        <h1 class="spanning">My Cart
                        </h1>
                    </div>
                </div>
                <div>
                    <form >
                        <hr>
                        <div class="register-container">

                            <div class="cart-row add-padding-bottom">
                                <div class="add" style="width: 50%;"><b>ITEM</b></div>
                                <div class="price-tag" style="width: 50%;"><b>PRICE</b></div>
                            </div>

                            <div class="cart-width-class">
                                <div class="item-row" style="width: 60%;">
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
                                <div class="item-row" style="width: 60%;">
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
                                <div class="item-row" style="width: 60%;">
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
                                <div class="item-row" style="width: 60%;">
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
                            </div>


                        </div>
                        <hr>
                        <div class="cart-row">
                            <div class="float-left-cart-row">Total</div>
                            <div class="float-right-cart-row price-tag">$50</div>
                        </div>
                </div>
                <div class="cart-button-div">
                    <button type="submit" class="cart-button"><a href="payment.php"
                            style="text-decoration: none; color: #fff;">Proceed to Payment</a></button>
                </div>
                </form>

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
                    <p>Copyright &#169;2020 Todos los derechos reservados | Este sitio esta hecho con por<i
                            class='fa fa-heart'></i>DiazApps</p>
                </div>
            </div>
        </footer>
    </div>
    </div>

    </div>

    <?php include 'register.php'; ?>
    <?php include 'login.php'; ?>

    <!-- <div id="my-register-modal" class="register-modal">
        <div class="register-modal-content">
          <div class="modal-header">
            <span class="register-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Registro de Usuario
          </div>
          <div class="modal-body">
              <hr>
            <div class="register-container">
                <form action="action_page.php" method="post">
                <label for="uname"><p>Nombre y apellido:</p></label>
                <input type="text" name="uname" required>
                <label for="email"><p>Correo:</p></label>
                <input type="email" name="email" required>
                <label for="psw"><p>Contraseña:</p></label>
                <input type="text" name="psw" required>
                <label for="psw"><p>Repetir Contraseña:</p></label>
                <input type="password" name="psw" required>
                <label for="address"><p>Direccion:</p></label>
                <textarea name="psw" required></textarea>
                </form>
              </div>
              <hr>
          </div>
          <div class="modal-footer">
            <button type="submit" class="register-button">Cargar</button>
        </div>
        </div>
      </div> -->

    <!-- <div id="my-login-modal" class="login-modal">
        <div class="login-modal-content">
          <div class="modal-header">
            <span class="login-close-modal spanning">&times;</span>
            <img class="burger-img spanning" src="images/Burguer.png" alt="">
            <h1 class="spanning">Iniciar Sesion
          </div>
          <div class="modal-body">
              <hr>
            <div class="login-container">
                <form action="action_page.php" method="post">
                <label for="uname"><p>Usuario</p></label>
                <input type="text" name="uname" required>
                <label for="psw"><p>Contraseña</p></label>
                <input type="password" name="psw" required>
                </form>
              </div>
              <hr>
          </div>
          <div class="modal-footer">
            <button type="submit" class="login-button">Entrar</button>
        </div>
        </div>
      </div> -->

    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>

</body>

</html>