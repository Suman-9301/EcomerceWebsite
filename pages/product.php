<?php
include '../includes/common.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
  </head>

  <body>

    <?php
    include '../includes/header.php';
    ?>

    <br><br>
  <div class="container">
    <div class="jumbotron">
      <h1><strong>Welcome to our Lifestyle Store!</strong> </h1>
      <p>We have the best cameras, watches, and shirts for you. No need to hunt around, we have all in one place.</p>
    </div>

    <div class="row">
      <?php
      $sql = "select * from items";
      $sql_result = mysqli_query($conn, $sql);
      $sql_count = mysqli_num_rows($sql_result);

      while($sql_row = mysqli_fetch_array($sql_result)){ ?>
      <div class="text-center col-md-3 " style="margin-bottom: 44px;" id="<?php $sql_row['id']; ?>">
          <img src="../img/camera.jpg" class="img-reasponsive img-thumbnail" alt="...">
          <h5 class="fs-2" style="margin-top: 24px;"><?php echo $sql_row['name']; ?></h5>
          <p class=" fs-5">Price: Rs.<?php echo $sql_row['price']; ?></p>
          <?php
          if(isset($_SESSION['email'])){
             
            $user_id = $_SESSION['user_id'];
            $item_id = $sql_row['id'];
            $select_query = "select * from users_items where item_id = $item_id and user_id = $user_id and status = 'Added to cart'";
            $result = mysqli_query($conn, $select_query);
            $count = mysqli_num_rows($result);

            if($count >= 1){  ?>
              <a href="#" role="button"  class="btn btn-secondary  container" disabled>Added to Cart</a>
            <?php }else{
              ?>
              <a href="../includes/cart-add.php?id=<?php echo $sql_row['id']; ?>" role="button" name="add" class="btn btn-primary container" >Add to Cart</a>
              <?php
            }
          }else{?>
            <p>
              <a href="login.php" role="button" class="btn btn-primary container">Buy Now</a>
            </p>

        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php  include '../includes/footer.php' ?>

  </body>
</html>
