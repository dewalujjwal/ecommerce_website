<?php
 include('connection.php');
 if(isset($_GET['product_id'])){
   
   $product_id = $_GET['product_id'];
  $stmt = $conn->prepare("SELECT * FROM featured WHERE product_id= ?");
   
  $stmt->bind_param("i",$product_id);
  
  $stmt->execute();
   
  $products=$stmt->get_result();
 }
 /*else{
  header('location: index.php');
 }*/

 


?>
