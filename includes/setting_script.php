<?php

  include 'common.php';

  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];
  $re_enter_password = $_POST['re_enter_password'];


  $old_password  = stripcslashes($old_password);
  $new_password = stripcslashes($new_password);
  $re_enter_password = stripcslashes($re_enter_password);

  $old_password = mysqli_real_escape_string($conn, $old_password);

  $new_len = strlen($new_password);
  $reenter_len = strlen($re_enter_password);

  if(!isset($_SESSION['email'])){
    header('location:../pages/index.php');
  }
  else{



    if($new_len === $reenter_len && $new_password === $re_enter_password){
      $new_password = md5($new_password);
      $re_enter_password = md5($re_enter_password);

      $old_password = md5($old_password);
      $password_select = "select 'password' from users where password = '$old_password'";
      $password_result = mysqli_query($conn, $password_select);
      $password_count = mysqli_num_rows($password_result);

      if($password_count > 0 ){
        $update_password = "UPDATE users SET password='$new_password' WHERE password='$old_password'";
        if($update_result = mysqli_query($conn, $update_password)){
          header('Location: ../pages/setting.php?success=Password Updated Successfully');
        }else{
          echo $conn->error;
        }

      }else{
        header('Location: ../pages/setting.php?olderr=*Old password does not match');
      }
    }else{
      header('Location: ../pages/setting.php?newerr=*New password and Re-Enter Password does not match');
    }

  }

  $conn->close();
 ?>
