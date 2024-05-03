<?php
require 'common.php';

$email = $_POST['email'];
$password = $_POST['password'];


$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);


$sql = "select id,email from users where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 1){
  $row = mysqli_fetch_assoc($result);
  $_SESSION['user_id'] = $row["id"];
  $_SESSION['email'] = $email;
  header('location:../pages/product.php');

}
else{
    header('Location: ../pages/login.php?err=*Invalid username or password');

}


$conn->close();

?>
