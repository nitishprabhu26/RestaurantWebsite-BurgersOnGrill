<?php   

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

 global $conn;
 include_once 'includes/dbh.inc.php';
 include 'includes/register.inc.php';
 include 'includes/login.inc.php';

 function adding_burger() {
   error_reporting(0);
   global $conn;
                                
                                $bgname = $_POST['hidden_name2'];
                                $bgprice = $_POST['hidden_price2'];
                                $bgimage = $_POST['hidden_image2'];
                                $query = "INSERT INTO cart_table (name, price, image) VALUES('$bgname', '$bgprice', '$bgimage')";
                                mysqli_query($conn, $query);
                                
 }

   function removing_burger() {
   error_reporting(0);
   global $conn;

                                $rmname = $_POST['hidden_name3']; 
                                $query = "DELETE FROM cart_table WHERE name='$rmname';";
                                mysqli_query($conn, $query);
                                
 }



 if(isset($_POST["add_burger"])) 
 {
    adding_burger();
  
 } 

if(isset($_POST["remove_burger"])) 
 {
    removing_burger();
  
 }
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="admin_cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="admin_cart.php"</script>';  
                }  
           }  
      }  
 }
 
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
                        <div class="register-container"><br>
                            <div class="cart-row add-padding-bottom">
                                <div class="add" style="width: 40%;"><b>ITEM</b></div>  
                                <div class="price-tag" style="width: 20%;"><b>PRICE</b></div>
                                 <div class="add" style="width: 5%;"><b>QUANTITY</b></div>
                            </div>

                            <div class="cart-width-class">
                              <?php  
                               $query = "SELECT * FROM cart_table ORDER BY id ASC";  
                               $result = mysqli_query($conn, $query); 
                               if(mysqli_num_rows($result) > 0)  
                               {  
                               while($row = mysqli_fetch_array($result) )  
                               {  
                               ?>
                                <div class="col-md-4" style="margin-bottom:20px;">  
                                   <form method="post" action="admin_cart.php?action=add&id=<?php echo $row["id"]; ?>">  
                                      <div style="background-image:#fffff; padding:5px; " align="center">  
                                        <img src="<?php echo $row["image"]; ?>" alt="Image" height="60px" width="60px" align="left"/>
                                        <b><p align="left" style="padding-left:70px;" class="text-info"><?php echo $row["name"];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $ <?php echo $row["price"]; ?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="1" placeholder="no." name="quantity" class="form-control" />    
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  &nbsp;&nbsp;
                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /></p></b> <br>
                                         
                                      </div>  
                                   </form>  
                                </div>
                                <?php  
                                }  
                                }  
                                ?>
                                
                            </div>
                            <br />  
                             <div>  
                                   <form method="POST" action="#"> 
                                      
                                        <h2>Add More Burgers</h2><b><br>
                                        <input type="text" name="hidden_name2" placeholder="Burger-name" />  
                                        <input type="text" name="hidden_price2" placeholder="Burger-price" /> <br><br>
                                        <b><label>Add Burger Image</label><b>
                                        <input type="file" name="hidden_image2" style="margin-top:5px;" class="btn btn-success" value="Add more Burgers" /><br><br>
                                        <input type="submit" name="add_burger" style="margin-top:5px;" class="cart-button" value="   Add Burger   " />
                                         
                                       
                                   </form>    
                                </div>
                                <br>
                        <div>  
                                   <form method="POST" action="#"> 
                                      
                                        <h2>Remove Existing Burgers</h2><b><br>
                                        <input type="text" name="hidden_name3" placeholder="Burger-name" /> <br><br>
                                        <input type="submit" name="remove_burger" style="margin-top:5px;" class="cart-button" value="   Remove Burger   " /><br>
                                         
                                       
                                   </form>  
                        </div> 
                <br>        
                <h2>Order Details</h2> <br> 
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr> <?php
                               if(!$values["item_quantity"])
                               {
                                $values["item_quantity"] = 1;
                               } ?>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td> 
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="admin_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>

                        </div>
                        <hr>
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

    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>