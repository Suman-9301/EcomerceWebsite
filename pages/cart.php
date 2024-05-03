<?php include 'common.php';?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page</title>
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
  <table class="table m-auto mt-5" style="width:44rem; ">
    <thead class="table-light">
      <tr>
      <th scope="col">Item Number</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $user_id = $_SESSION['user_id'];
      $inner_join = "SELECT i.name, i.price ,i.id FROM items i JOIN users_items ui ON i.id = ui.item_id WHERE ui.user_id = $user_id";
      $result = mysqli_query($conn, $inner_join);
      $counter = 1;
      $total = 0;

        while ($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $counter; ?></th>
        <td><?php echo $row[0] ?></td>
        <td>Rs.<?php echo $row[1] ?></td>
        <td><a href="../includes/cart-remove.php?id=<?php echo $row[2]; ?>" class="btn btn-danger btn-sm" role="button">Remove</a></td>
      </tr>
    <?php
    $total = $row[1] + $total;
    $counter++; }
    ?>
    <tr>
      <th colspan="2">Total</th>
      <td>Rs.<?php echo $total; ?></td>
      <td><a href="../includes/success.php?id=<?php echo $user_id; ?>" class="btn btn-primary btn-sm" role="button">Confirm Order</a></td>
    </tr>

    </tbody>

  </table>
</div>
<?php } ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  include '../includes/footer.php' ?>

  </body>
</html>


<!-- <tbody>
//     <tr>
//        <th scope="row">1</th>
//        <td>Watch</td>
//        <td>Rs.4000</td>
//      </tr>
//      <tr>
//         <th scope="row">2</th>
//         <td>Shirts</td>
//         <td>Rs.3000</td>
//       </tr>
//       <tr>
//          <th scope="row">3</th>
//          <td>Camera</td>
//          <td>Rs.6000</td>
//        </tr>
//       <tr>
//           <th scope="row">4</th>
//           <td>Watch</td>
//           <td>Rs.5000</td>
//       </tr>
//      <tr>
//        <th colspan="2">Total</th>
//        <td>Rs.18000</td>
//        <td><button type="button" class="btn btn-primary" name="button">Confirm Order</button></td>
//      </tr>
// </tbody> -->
