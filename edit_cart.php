<?php
session_start();
//session_destroy();


$product_name=$_POST['nam'];

$product_image=$_POST['name1'];

$product_price=$_POST['name2'];

$product_quantity=$_POST['name3'];
$event =$_POST['event'];

$product= array($product_name,$product_image,$product_price,$product_quantity);

if($event =='edit'){
 foreach($_SESSION['cart']as $key => $value){
        if($value[0] == $product_name){
          // print_r($_SESSION['cart']);
           $_SESSION['cart'][$key] = $product;
           // print_r($_SESSION['cart']);
           header('location:cart.php');
        }
}
}
else if($event=='Delete'){
    $i=0;
    foreach($_SESSION['cart'] as $key=>$value){
        if($value[0] === $product_name){
           
           unset($_SESSION['cart'][$key]);
          
          $_SESSION['cart'] = array_values( $_SESSION['cart']);
          header('location:cart.php');
        
        
        }

        $i++;
    }
}

//header('location:cart.php');

 ?>