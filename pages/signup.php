
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>

    <?php  include '../includes/header.php' ?>
    <br><br><br><br>
<div class="container-fluid p-0">
  <div class="card m-auto " style="width: 44rem;" >
    <div class="card-header text-bg-primary fs-3">
      SIGN UP
    </div>
    <div class="card-body">
      <div class="text-danger mb-3">
        <?php
        if($_GET){
        echo $_GET['err']; }?>
      </div>
    <form method="post" action="../includes/signup_submit.php">
      <div class="mb-2">
        <label for="exampleInputname" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" aria-describedby="emailHelp" required
        oninvalid="this.setCustomValidity('Enter your name')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required
        oninvalid="this.setCustomValidity('Enter valid Email address')"
        oninput="setCustomValidity('')">
        <div class="text-danger mb-3">
      </div>
      <div class="mb-2">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" pattern=".{6,}" required
        oninvalid="this.setCustomValidity('Enter strong password')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-2">
        <label for="exampleInputcontact" class="form-label">Contact</label>
        <input name="contact" type="tel" class="form-control" pattern="[0-9]{10}" required
        oninvalid="this.setCustomValidity('Enter valid Contact Number')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-2">
        <label for="exampleInputcity" class="form-label">City</label>
        <input name="city" type="text" class="form-control" aria-describedby="emailHelp" required
        oninvalid="this.setCustomValidity('Enter City')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
        <textarea name="address" class="form-control" rows="3" oninvalid="this.setCustomValidity('Enter valid Address')"
        oninput="setCustomValidity('')"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    </div>
    <div class="card-footer text-muted ">
      Already have an account ? <span><a href="login.php"> Login</a></span>
    </div>
  </div>
</div>

<br><br>
<?php  include '../includes/footer.php' ?>

  </body>
</html>
