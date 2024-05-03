<?php
  include 'common.php';

  $id = $_GET['id'];
  $update_sql = "update users_items set status = 'Confirmed' where user_id = $id ";

  if($conn->query($update_sql) === TRUE){
    echo "Your order is confirmed.";
    echo "Thank you for shopping with us. <a href='../pages/product.php'>Click here</a> to purchase any other item.";

  }else{
    echo $conn->error;
  }

  $conn->close();
 ?>
