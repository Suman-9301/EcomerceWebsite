<?php
include 'common.php';

$nameErr = $emailErr = $paasswordErr = $contactErr = $cityErr = $addressErr = "";
$name = $email = $password = $contact = $city= $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = md5($_POST["password"]);
  }

  if (empty($_POST["contact"])) {
    $contactErr = "Contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


$select_sql = "select id,name,email from users where name = '$name' or email = '$email'";
$select_result = mysqli_query($conn, $select_sql);
$select_count = mysqli_num_rows($select_result);


if($select_count > 0){
  header('Location: ../pages/signup.php?err=*Username and Password already taken');
}else{
  $insert_sql = "insert into users (name,email,password,contact,city,address) values ('$name', '$email','$password','$contact','$city','$address')";
  $insert_result = mysqli_query($conn, $insert_sql);

  if($insert_result){
    $select = "select id,name,email from users where name = '$name' or email = '$email'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row['id'];
    header('location:../pages/product.php');

  }else{
    echo $conn->error;
  }
}


$conn->close();

?>
