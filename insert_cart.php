<?php
session_start();
//session_destroy();
$product_name=$_POST['product_name'];

$product_image=$_POST['product_image'];

$product_price=$_POST['product_price'];

$product_quantity=$_POST['product_quantity'];

if(isset($_POST['addcart'])&& isset($_SESSION['cart'])){   
    $check_product = array_column($_SESSION['cart'],'0');
    if(in_array($product_name,$check_product)){
        echo " <script>
    alert(' product alredy exist');
    window.location.href='index.php';
    </script>";
    }


   else{
    $_SESSION['cart'][] =array($product_name,$product_image,$product_price,$product_quantity);
   header('location:cart.php');
   }

 

    
    
    
}  

else{
    $_SESSION['cart'][] =array($product_name,$product_image,$product_price,$product_quantity);
header('location:cart.php');
}






 ?>