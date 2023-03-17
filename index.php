<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!---<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
  </head>
  <body>

    <!------navbar ------->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> 

        <div class="container">
         <img src="assets/img/log.jpg"class="logo rounded">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="account.php">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contack.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
               
              </li>
              
               
                
              <?php 
              session_start();
                if(isset($_SESSION['user'])){
                echo "<a href='accout.html'class='nav-link'>".$_SESSION['user']."</a>";
               echo" <li class='nav-item'> <a class ='nav-link' href='logout.php' type=> logout</a></li>";
                 
                }
                else{
                  echo" <li class='nav-item'> <a class ='nav-link' href='login.html' type=> login</a></li>";
                }
              ?>
             
              
              
              
            </ul>
          </div>
        </div>
      </nav>

      <!--home-->
      <section id="home">
        <div class="container">
          <h4>NEW ARRIVALS</h4>
          <h1><span>Best Prices</span>  This Season</h1>
          <p>Eshop offers the best prooduct for the most affordable prices</p>
          <button>Shop Now</button>
        </div>
      </section>

   
    
<!---Brand-->
<section id="brand" class="container-fluid">
  <div class="row">
    <div class="column">
      <img src="assets/img/brand5.jpg" alt="img" class="img" style="width:100%">
      <div class="middle">
    <div class="text">Indo-Western</div>
  </div>
    </div>
    <div class="column">
      <img src="assets/img/brand4.jpg" alt="img" class="img"style="width:100%" >
      <div class="middle">
        <div class="text">Sherwani</div>
      </div>
    </div>
    <div class="column">
      <img src="assets/img/brand3.jpg" alt="img" class="img " style="width:100% ;height:100% ">
      <div class="middle">
        <div class="text">Safa</div>
      </div>
    </div>
    <div class="column">
      <img src="assets/img/brand2.jpg" alt="img" class="img" style="width:100% ;height:100%">
      <div class="middle">
        <div class="text">Maharaja Har</div>
      </div>
    </div>
  </div>
  
</section>

<!--new-->
<section id="new" class="w-100">
  <div class="row r-0 m-0">
    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img src="assets/img/1p.jpg" alt="img" class="img-fluid">
      <div class="details">
        <h2>Extremly Awesome Shoes</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>


    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img src="assets/img/2p.jpg" alt="img" class="img-fluid">
      <div class="details">
        <h2>Extremly Awesome Shoes</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>


    <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
      <img src="assets/img/3p.jpg" alt="img" class="img-fluid">
      <div class="details">
        <h2>Extremly Awesome Shoes</h2>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </div>

  </div>
</section>
<!---Feature-->
<section id="feature" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
    <h3>Our Featured</h3>
    <hr style="color: coral;">
    <p>Here check out our featured products</p>
  </div>
  <div class="row mx-auto container-fluid">
    

  <?php 
   include('assets/server/get_featured_product.php'); ?>
     
     <?php while ($row= $featured_products-> fetch_assoc()){ ?>

 

    <div class="product text-center col-lg-3 col-mb-4 col-sm-12">
     <img src="assets/img/<?php echo $row['image']; ?> " alt="img" class="img-fluid mb-3">
    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star "></i>
    </div>
     <h5 class="p-name"><?php echo $row['product_name']; ?>       </h5>
     <h4 class="p-price">$<?php echo $row['product_ price']; ?> </h4>
     <a href="<?php echo" single_product.php?product_id=". $row['product_id'];?>"><button  class="buy-btn">Buy Now</button></a>
    </div>
   <?php } ?>
  </div>
</section>
<!--banner-->
<section id="banner" class="my-5 py-5">
  <div class="container">
    <h4>Wedding Season Sale</h4>
    <h1>Groom's Collection <br> up to 20% OFF</h1>
    <button >Shop Now</button>
  </div>
</section>

<!--Sherwani--> 
<section id="feature" class="my-5 ">
  <div class="container text-center mt-5">
    <h3>Sherwani</h3>
    <hr style="color: coral; ">
    <p>Here check out our  Work</p>
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


<!--Indo-western-->
<section id="feature" class="my-5 ">
  <div class="container text-center mt-5">
    <h3>Sherwani</h3>
    <hr style="color: coral; ">
    <p>Here check out our  Work</p>
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

<!---SAFA-->
<section id="feature" class="my-5 ">
  <div class="container text-center mt-5">
    <h3>Sherwani</h3>
    <hr style="color: coral; ">
    <p>Here check out our  Work</p>
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
</section>1



<!--Footer-->
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
      <div class="row container mx-auto">
        <img src="assets/img/insta.jpg"  class="img-fluid w-25 h-100 m-2 imge">
        <img src="assets/img/facebook.jpg"  class="img-fluid w-25 h-100 m-2 imge">
        <img src="assets/img/mail.png"  class="img-fluid w-25 h-100 m-2 imge ">
        <img src="assets/img/tweet.png"  class="img-fluid w-25 h-100 m-2 imge ">
        <img src="assets/img/in.png"  class="img-fluid w-25 h-125 m-2 imge">
      </div>
    </div>
  </div>
  <div class="copyright mt-5">
       <div class="row container mx-auto">
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <img class="pay"src="assets/img/payment.png" href="#" >
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




