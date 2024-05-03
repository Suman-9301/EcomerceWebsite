
<?php
require 'common.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
  </head>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
      <div class="container">

      <a class="navbar-brand" href="../includes/Index.php">Lifestyle Store</a>

      <div style="display:flex; justify-content:end;">
        <button class="navbar-toggler navbar-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="me-auto mb-2 mb-lg-0" style="display:flex;">

            <?php
            if (isset($_SESSION['email'])){
             ?>
             <li class="nav-item">
               <a class="nav-link pe-5" aria-current="page" href="cart.php">Cart</a>
             </li>
             <li class="nav-item">
               <a class="nav-link pe-5" aria-current="page" href="setting.php" >Settings</a>
             </li>
             <li class="nav-item">
               <a class="nav-link pe-5" aria-current="page" href="../includes/logout.php" >Logout</a>
             </li>

             <?php
           }else{
              ?>

            <li class="nav-item">
              <a class="nav-link pe-5" aria-current="page" href="../pages/signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-5" aria-current="page" href="login.php">Login</a>
            </li>

            <?php } ?>
          </ul>
        </div>
      </div>

    </div>
  </nav>
  </body>
</html>
