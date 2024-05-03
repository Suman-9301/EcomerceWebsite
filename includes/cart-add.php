<?php
include 'common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$insert_sql = "insert into users_items (id, user_id, item_id, status) values (NULL,'$user_id', '$item_id', 'Added to Cart')";

if($conn->query($insert_sql) === TRUE){
  header('location: ../pages/product.php');
}else{
  echo $conn->error;
}

$conn->close();
 ?>
