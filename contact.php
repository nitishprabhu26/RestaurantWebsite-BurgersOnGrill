<?php
include 'includes/contact.inc.php';
include 'includes/register.inc.php';
include 'includes/login.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTO</title>
    <link rel="icon" href="images/5.png">
    <link rel="stylesheet" type="text/css" href="css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="contact-header-container">
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
                            <li class="current"><a href="contact.php">CONTACTO</a></li>
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
            <div class="zigzag-triangle">      
            </div>
            <div class="contact-message-container">
                <p>DI HOLA</p>
                <h1>Contacto</h1>
            </div>
        </div>

        <div class="contactform-container">
            <div class="zigzag-triangle2"></div>
            <div class="contactform-content">
                <img class="burger-img" src="images/Burguer.png" alt="">
                <h1 class="contact-add-padding-top">Di hola</h1>
                <p class="contact-add-padding-top">Di hola, envianos un mensaje</p>
                <p class="contact-add-padding-top">Envianos tus comentarios y suguerencias ustedes son importante para nosotros</p>

                <form method="POST" class="contactform-form" name="contact">

                    <input type="text" name="name" pattern="[A-Za-z ]{1,50}" title="Enter Valid Name - Alphabets only with a maximum length of 50 charecters" placeholder="Enter Name" maxlength="50" oninput="contactNamecheck()" required>
                    <div class="error-text" id="err_contact_name"></div>

                    <input type="email" name="contact_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" title="Enter Valid Email - All lowercase & Alphanumeric - something@something.domain" placeholder="Enter Email" maxlength="50" oninput="contactEmailcheck()" required>
                    <div class="error-text" id="err_contact_email"></div>

                    <input type="text" name="subject" title="Enter subject containing at most 100 charecters" placeholder="Enter subject" maxlength="100" oninput="contactSubjectcheck()" required>
                    <div class="error-text" id="err_subject"></div>

                    <textarea name="message" title="Enter message containing at most 500 charecters" placeholder="Enter Message" maxlength="500" oninput="contactMessagecheck()" required></textarea>
                    <div class="error-text" id="err_message"></div>

                    <button type="submit" name="contact" class="button-class">ENVIAR MENSAJE</button>
                </form>
            </div>
        </div>

        <?php if(isset($_SESSION['email']) && $_SESSION['acc_type']==="admin"):?>
        <div class="contactform-result-container">
            <h1 class="contact-add-padding-top">Customer Feedback.</h1>
            <p class="contact-add-padding-top">List of the feedbacks provided by the customers</p>
            <div class="contactform-result-display">
            <?php foreach($feedbackArray as $post) : ?>
                <div class="individual-contact-post">
                <p>  Name: <?php echo $post['name']; ?></p>
                <p>  Email: <?php echo $post['email']; ?></p>
                <p>  Subject: <?php echo $post['subject']; ?></p>
                <p>  Message: <?php echo $post['message']; ?></p>
                </div>
                <hr>
		    <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>	


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


    <?php include 'register.php'; ?>
    <?php include 'login.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>

</body>

</html>