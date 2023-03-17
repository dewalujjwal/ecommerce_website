<?php
 include('assets/server/connection.php');
   
  if(isset($_GET['product_id'])){
    echo "true";
    $product_id = $_GET['product_id'];
  $stmt = $conn->prepare("SELECT * FROM featured WHERE product_id= ?");
   
  $stmt->bind_param("i",$product_id);
  
  $stmt->execute();
   
  $products=$stmt->get_result();
 }
 else{
  header('location: index.php');
 }

 


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
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
              <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
             <a href="account.html"> <i class="fas fa-user"></i></a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
  <!--  <?php //include('assets/server/single.php'); ?> Single product-->
      <section class="container single-product mt-5 pt-5">
        <div class="row mt-5">
          <?php while ($row= $products-> fetch_assoc()) { ?>

          
            <div class="col-lg-5 col-md-5 col-sm-12">
                <img  class ="img-fluid w-100 pb-1"src="assets/img/<?php echo $row['image'] ;?>" alt="img" id="main-img">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="assets/img/<?php echo $row['image'] ;?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/<?php echo $row['image'] ;?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/<?php echo $row['image'] ;?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/<?php echo $row['image'] ;?>" width="100%" class="small-img">
                    </div>
                </div>
            </div>
           

            <div class="col-lg-6 col-md-12 col-12">
                <h6 >Groom's Fashion</h6>
                <h3 class="py-4"><?php echo $row['product_name'] ;?></h3>
                <h2><?php echo $row['product_ price'] ;?></h2>

                <form  method ="POST" action="insert_cart.php">
              <input type="hidden" name="product_image" value="<?php echo $row['image'] ;?>">
              <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ;?>">
              <input type="hidden" name="product_price" value="<?php echo $row['product_ price'] ;?>">
                <input type="number" name="product_quantity" value="1">
                <input class="buy-btn" type="submit" name="addcart"value="Add">
          </form>
              
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span>THe details of the product  will be display</span>

            </div>
           
            <?php } ?>
        </div>
      </section>

      <!---Related products-->
<section id="related products" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Related Products</h3>
      <hr style="color: coral;">
      
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-mb-4 col-sm-12">
       <img src="assets/img/4p.jpg" alt="img" class="img-fluid mb-3">
      <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star "></i>
      </div>
       <h5 class="p-name">product1</h5>
       <h4 class="p-price">$199</h4>
       <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-mb-4 col-sm-12">
        <img src="assets/img/5p.jpg" alt="img" class="img-fluid mb-3">
       <div class="star">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star "></i>
       </div>
        <h5 class="p-name">product1</h5>
        <h4 class="p-price">$199</h4>
        <button class="buy-btn">Buy Now</button>
       </div>
       <div class="product text-center col-lg-3 col-mb-4 col-sm-12">
        <img src="assets/img/6p.jpg" alt="img" class="img-fluid mb-3">
       <div class="star">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star "></i>
       </div>
        <h5 class="p-name">product1</h5>
        <h4 class="p-price">$199</h4>
        <button class="buy-btn">Buy Now</button>
       </div>
       <div class="product text-center col-lg-3 col-mb-4 col-sm-12">
        <img src="assets/img/7p.jpg" alt="img" class="img-fluid mb-3">
       <div class="star">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star "></i>
       </div>
        <h5 class="p-name">product1</h5>
        <h4 class="p-price">$199</h4>
        <button class="buy-btn">Buy Now</button>
       </div>
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
        <script>
           var mainImg=  document.getElementById("main-img");
            var smallImg = document.getElementsByClassName("small-img");
            
            for(let i=0;i<4;i++){
              smallImg[i].onclick = function(){
                var temp=mainImg.src;
              mainImg.src=smallImg[i].src;
              smallImg[i].src=temp;
            }
            }
         
           
             
        </script>

      </body>
      </html>
      