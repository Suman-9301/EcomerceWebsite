
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/index.css">
  </head>
  <body>

    <?php  include '../includes/header.php' ?>
    <br><br>
<div class="container">
  <div class="card m-auto my-5" >
    <div class="card-header text-bg-primary fs-3">
      LOGIN
    </div>
    <div class="card-body">
    <form method="post" action="../includes/login_submit.php">
      <p style="color: grey;" class="fs-5 mb-3">Login to make a purchase</p>
      <div class="text-danger mb-3">
        <?php
        if($_GET){
        echo $_GET['err']; }?>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required
        oninvalid="this.setCustomValidity('Enter valid email')"
        oninput="setCustomValidity('')">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" pattern=".{6,}" required
        oninvalid="this.setCustomValidity('Enter strong password')"
        oninput="setCustomValidity('')">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    <div class="card-footer text-muted">
      Don't have an account ? <span><a href="../pages/signup.php"> Sign Up</a></span>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>
<?php  include '../includes/footer.php' ?>


  </body>
</html>
