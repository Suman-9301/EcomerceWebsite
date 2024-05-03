
<?php
require 'common.php';

if(isset($_SESSION['email'])){
  header('location:../pages/product.php');
}else{
  header('location:../pages/index.php');
}

 ?>
