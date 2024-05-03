<?php include 'common.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/index.css">
  </head>
  <body>

    <?php  include '../includes/header.php' ?>
    <br><br>

    <?php
    if(isset($_SESSION['email'])){
     ?>

     <div class="container">
       <div class="m-auto my-5 text-center">
         <div class="text-success fs-2">
           <?php
           if($_GET){
           echo $_GET['success']; }?>
         </div>
       </div>
     </div>
<div class="container ">
  <div class="card m-auto my-5" style="border: 1px solid blue;">
    <div class="card-header text-bg-primary fs-3">
      Reset Password
    </div>
    <div class="card-body">
    <form action="../includes/setting_script.php" method="post">
      <div class="text-danger mb-3">
        <?php
        if($_GET){
        echo $_GET['olderr']; }?>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Old Password</label>
        <input name="old_password" type="password" class="form-control" pattern=".{6,}" required
        oninvalid="this.setCustomValidity('Invalid Password')"
        oninput="setCustomValidity('')">
      </div>
      <div class="text-danger mb-3">
        <?php
        if($_GET){
        echo $_GET['newerr']; }?>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">New Password</label>
        <input name="new_password" type="password" class="form-control" pattern=".{6,}" required
        oninvalid="this.setCustomValidity('Enter strong password')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Re-Enter New Password</label>
        <input name="re_enter_password" type="password" class="form-control" pattern=".{6,}" required
        oninvalid="this.setCustomValidity('Password does not match the new password')"
        oninput="setCustomValidity('')">
      </div>
      <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
  </div>
  </div>
</div>
<?php }else{
  header('location: index.php');
}

?>
<br><br><br><br><br><br><br><br>

<?php  include '../includes/footer.php' ?>

  </body>
</html>
