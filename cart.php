

<?php 
    session_start();
    if(isset($_SESSION['user'])){  
           
  ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
  </head>
  <body>

    <!------navbar ------->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> 

        <div class="container">
         <img src="assets/img/img21.jpg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="account.html">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contack.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
               <a href="account.html"> <i class="fas fa-user"></i></a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>

     
     


   
    


   <!--cart-->
     <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-blonde">Your Cart</h2>
            <hr>
        </div>
         
        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
           
            <?php 
             $tp=0;
               if(isset($_SESSION['cart'])){
               
                $c=0;
                 foreach($_SESSION['cart'] as $value ){
                 

                 
                   
                 
            ?>

         <tr>

            <td>
                <div class="product-info">
                    <img src="assets/img/<?php  echo $value[1];?>" alt="img">
                    <div>
                          <p><?php  echo $value[0];?></p>
                        <small><span>₹</span><?php echo $value[2];?></small>
                        <br>
                        <form action="edit_cart.php" class="" method="post">
                        <input type="submit"  name="event" class="edit-btn" value="Delete">
                        <input type="hidden" name="name3" value="<?php  echo $value[3];?>">
                      <input type="hidden" name="name2" value="<?php  echo $value[2];?>">
                       <input type="hidden" name="nam" value="<?php  echo $value[0];?>">
                          <input type="hidden" name="name1" value="<?php  echo $value[1];?>">
                        </form>
                 </div>
                </div>
            </td>
            <td>
                
                <form action="edit_cart.php" class="" method="post">
                <input type="number" class="text-center" name="name3" value="<?php  echo $value[3];?>">
                <input type="submit"  name="event" class="edit-btn" value="edit">
                <input type="hidden" name="name2" value="<?php  echo $value[2];?>">
             <input type="hidden" name="nam" value="<?php  echo $value[0];?>">
             <input type="hidden" name="name1" value="<?php  echo $value[1];?>">
                 </form>
            </td>

            <td>
                <span>₹</span>     <?php $tp+=(int)$value[3]*(int)$value[2];?>
                <span class="product-price"><?php  echo (int)$value[3]*(int)$value[2];?></span>
            </td>
             <input type="hidden" name="name2" value="<?php  echo $value[2];?>">
             <input type="text" name="nam" value="<?php  echo $value[0];?>">
             <input type="hidden" name="name1" value="<?php  echo $value[1];?>">
         </tr>
         <?php
                  }  
                 
                
              }
                 ?>
                
         

    
        </table>

        
        
        
         
             
   

        <div class="cart-total">
          <table>
            <tr>
              <td>Subtotal</td>
              <td><?php  echo $tp;?></td>
            </tr>
            <tr>
              <td>Shipping Charge</td>
              <td><?php  echo 250;?></td>
            </tr>
            <tr>
              <td>Total</td>
              <td><?php  echo $tp+250;?></td>
            </tr>
          </table>
        </div>

       
       
        <div class="checkout-container">
          <button class=" checkout-btn">Checkout</button>

        </div>


     </section>
      
      
     

     








      <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img src="assets/img/logo.jpg" alt="img" class="logo">
          <p class="pt-3">We provide the latest design in most affordable prices</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">features</h5>
            <ul>
              <li><a href="#">Sherwani</a></li>
              <li><a href="#">Indo-Western</a></li>
              <li><a href="#">Safa</a></li>
              <li><a href="#">Maharaja Har</a></li>
              <li><a href="#">Exclusive</a></li>
            </ul>
          </div>
      
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div>
              <h6>Address</h6>
              <p>1234 Street Name,City</p>
            </div>
            <div>
              <h6>Phone</h6>
              <p>1234567890</p>
            </div>  
            <div>
              <h6>Email</h6>
              <p>info@gmail.com</p>
            </div>  
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div class="row">
              <img src="assets/img/ins.jpg"  class="img-fluid w-25 h-100 m-2">
              <img src="assets/img/ins.jpg"  class="img-fluid w-25 h-100 m-2">
              <img src="assets/img/ins.jpg"  class="img-fluid w-25 h-100 m-2">
              <img src="assets/img/ins.jpg"  class="img-fluid w-25 h-100 m-2">
              <img src="assets/img/ins.jpg"  class="img-fluid w-25 h-100 m-2">
            </div>
          </div>
        </div>
        <div class="copyright mt-5">
             <div class="row container mx-auto">
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <img src="assets/img/payment.jpg" >
              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                <p>eCommerce @2025 All Rights Reserved</p>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <a href="#" ><i class="fab fa-facebook"></i></a>
                <a href="#" ><i class="fab fa-instagram"></i></a>
                <a href="#" ><i class="fab fa-twitter"></i></a>
              </div>
      
             </div>
      
      
        </div>
      
      </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php }
   else{
    header('location:login.html');
   }
?>



























