<?php
include('assets/server/connection.php');
  session_start();
   
 // echo "hello";
  $a=$_SESSION['user'];
  echo $a;
  //$name=mysqli_query($conn,"select user_name from users where num=$a");
  //$email=mysqli_query($conn,"select user_email from users where num=$a");
  //print "$name";
  //echo $email;
  


  $stmt = $conn->prepare("SELECT user_name,user_email FROM users where user_email='$a'");
  
  $stmt->execute();
   
  $featured_products =$stmt->get_result();
    print_r ($featured_products);
    while ($row= $featured_products-> fetch_assoc()){
       
    
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

    <!------navbar ----->
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
              <a class="nav-link" href="#">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contack.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
             <a href="#"> <i class="fas fa-user"></i></a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
--
</body>

  


<!--Account-->
<section class="my-5 py-5">
    <div class="container row mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h3 class="font-weight-bold">Account info</h3>
            <hr class="mx-auto">
            <div class="account-info">
                 <p>profile picture:<span><img src="assets/img/<?php echo $row['image']; ?> " alt="img" class="img-fluid mb-3"></span></p>
                <p>Names :<span><?php echo " ".$row['user_name'];?></span></p>
                <p>Email :<span><?php echo " ".$row['user_email'];?></span> </p>
                <p><a href="" id="order-btn">Your orders</a></p>
                <p><a href="" id="logout-btn">Logout</a></p>
            </div>
        </div>
         
        <div class="col-lg-6 col-md-12 col-sm-12">
            <form id="account-form">
                <h3 class="text-center">Change Password</h3>
                <hr class="mx-auto">
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" id="account-password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label >Confirm Password</label>
                    <input type="password" class="form-control " id="confirm-password" name="password" placeholder="confirm password">
                </div>
                <div class="form-group ">
                  <input type="submit" class="change-pass-btn " id="change-pass" value="change password">
              </div>
            </form>
        </div>
    

     


    </div>
      

    
</section>






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
<?php
    }
?>