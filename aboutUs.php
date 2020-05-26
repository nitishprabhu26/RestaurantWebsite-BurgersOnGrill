<?php
include 'includes/register.inc.php';
include 'includes/login.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOBRE NOSOTROS</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="aboutus-header-container">
            <header>
                <div class="container container-flex">
                    <div id="logo">
                        <img src="images/5.png" alt="">
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="home.php">INICIO</a></li>
                            <hr>
                            <li class="current"><a href="aboutUs.php">SOBRE NOSOTROS</a></li>
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
            <div class="aboutus-message-container"> 
                <p>LAS MEJORES DE LA CIUDAD</p>
                <h1>Sobre Nuestras Hamburguesas</h1>
            </div>
        </div>

        <div class="somosIbra-container">
        <div class="zigzag-triangle2"></div>
            <div class="somosIbra-content">
                <div class="somosIbra-img-container">
                    <img class="hamburguesa1-img" src="images/hamburguesa1.jpg" alt="">
                    <img class="hamburguesa1-img" src="images/hamburguesa2.jpg" alt="">
                </div>
                <h1>Somos Ibra</h1>
                <div class="somosIbra-paragraph-container">
                    <p class="somosIbra-paragraph-one">Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
                    Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las <br> 
		    mejores Hamburguesas..</p>
                    <p class="somosIbra-paragraph-two">Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la pizzería <b>DomiPizza's</b>,
 			      con una inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender 
			      Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
		    <p class="somosIbra-paragraph-three">A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro,
                              como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más 
                              en Barcelona, en 1965 renombró sus tres locales como <b>Ibra's Burger Grill</b>.</p>	
               
		
    </div>
    <div class="aboutus-Buttons">
		<button class="aboutus-red-button" ><a class="menu-click-btn" href="menu.php">VER MENÚ HOY</a></button> &nbsp;
		<button class="aboutus-green-button" ><a class="menu-click-btn" href="menu.php">PEDIR AHORA</a></button>
        </div>
            </div>
        </div>
        <div class="client-review-container">
            <div class="client-review-title">
                <img class="burger-img" src="images/Burguer.png" alt="">
                <h1>Lo que dicen los clientes</h1><br><br><br>
	    </div>
	    <div class="clients about-us-clientscontainer">
		
		<p class="client-one"><span class="client-review-subject">Las Mejores Hamburguesas<br><br></span>Me gustan sus Hamburguesas, 
			  siempre seran mi lugar de encuetros y buenos recuerdas acompañados de la mejor
			  Hamburguesa<br><br><img class="client-photograph1" src="images/client-photograph1.png" alt=""><br><span class="reviewer-name">Shawn Gaines</span>,Cliente</p>
		<p class="client-two"><span class="client-review-subject">Que Hamburguesa mas Increible<br><br></span>Voy con mi familia a compertir 
			  de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito
			  <br><br><img class="client-photograph1" src="images/client-photograph2.png" alt=""><br><br><span class="reviewer-name">Daiane Smith</span>,Cliente</p>
		<p class="client-three"><span class="client-review-subject">La mejor hamburguesa de la ciudad<br><br></span>Soy amante de la buena hamburguesa y 
			  puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la 
			  oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente 
			  hamburguesa<br><br><img class="client-photograph1" src="images/client-photograph3.png" alt=""><br><br><span class="reviewer-name">Michael Williams</span>,Cliente</p>
            </div>
        </div>
	<div class="aboutus-Lastslogan-container">
        <div class="zigzag-triangle5"></div>
		<div class="aboutus-Slogan-content">
		<h1>Nos esforzamos por brindar un buen servicio para su disfrute.</h1>
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
                    <p class="footer-value">Av. Intercomunal, sector la Mora, calle 8</p>
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