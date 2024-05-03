<?php
include 'common.php';

$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];

$delete_sql = "delete from users_items where user_id= $user_id and item_id= $item_id";

if($conn->query($delete_sql) === TRUE){
  header('location: ../pages/cart.php');
}else{
  echo $conn->error;
}

$conn->close();
 ?>
