<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/confirmation.css">
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    
    <title>TechOut Store</title>
 </head>
<body>   
   <?php include "includes/header.inc.php"; ?>

   <section id="products">
    <div class="parent">
      <h1>ORDER SUCCESSFUL!</h1>
      <p>Thank you for choosing The Tech Out for your purchase. We appreciate your business and look forward to providing you with the best service and products. Your order has been received and will be processed soon. We will send you a confirmation email with the details of your order. If you have any questions or concerns, please don't hesitate to contact us. Thank you again for shopping at The Tech Out!</p>
      
      <a href="store.php" class="btn"><i class='fas fa-store-alt'></i> Go back to the Store!</a>
    </div>
   </section>
   <?php
      include "includes/connect_database.inc.php";

      if (isset($_SESSION['fullName'])) {
         $fullName = $_SESSION['fullName'];
         $emailAdd = $_SESSION['emailAdd'];
         $homeAddress = $_SESSION['homeAddress'];
      } else {
         header("Location: login.php");
         exit;
      }

      $id = $_GET['id'];                  // ORDERED PRODUCT ID
      $orderedQuantity = $_GET['qty'];    // ORDERED PRODUCT QUANTITY
      $variant = $_GET['opt'];            // ORDERED PRODUCT VARIANT
      $orderedTotal = $_GET['ttl'];       // ORDERED TOTAL AMOUNT
      $Mop = 'Cash on Delivery';          // MODE OF PAYMENT

      // GET DETAILS FROM THE ORDERED QUANTITY
      $productsDetailsQuery = "SELECT * FROM products WHERE ID = $id";
      $resultProductDetails = mysqli_query($con, $productsDetailsQuery) or die (mysqli_error($con));
      $valueProductDetails = mysqli_fetch_assoc($resultProductDetails);
         $currentProductQuantity = $valueProductDetails['product_stock'];
         $item = $valueProductDetails['product_name'];
         $unitprice = $valueProductDetails['product_price'];
         
      $newProductQuantity = $currentProductQuantity - $orderedQuantity;
      $updateQuery = "UPDATE products SET product_stock = $newProductQuantity WHERE ID = $id";
      mysqli_query($con, $updateQuery);

      $transactionDetailsQuery = "SELECT * FROM transaction WHERE CustomerEmail = '$emailAdd' AND Item = '$item' AND Variant = '$variant'";
      $resultTransactionDetails = mysqli_query($con, $transactionDetailsQuery) or die (mysqli_error($con));
      $valueTransactionDetails = mysqli_fetch_assoc($resultTransactionDetails);
      $datetime = new DateTime('now', new DateTimeZone('Asia/Manila'));

      if (mysqli_num_rows($resultTransactionDetails) > 0) {
         // TO UPDATE THE TRANSACTION, IT NEEDS TO HAVE THE SAME CUSTOMER EMAIL, ITEM AND VARIANT
         $currentTransactionQuantity = $valueTransactionDetails['Quantity'];
         $currentTransactionTotal = $valueTransactionDetails['Totalprice'];
         $newQuantityTransaction = $currentTransactionQuantity + $orderedQuantity;
         $newTotalTransaction = $currentTransactionTotal + $orderedTotal;
         $newDateTimeTransaction = "Updated: " . $datetime->format('Y-m-d H:i:s');;

         $sql = "UPDATE transaction SET Quantity = '$newQuantityTransaction', Totalprice = '$newTotalTransaction', DateTimeOrdered = '$newDateTimeTransaction' WHERE CustomerEmail = '$emailAdd' AND Item = '$item' AND Variant = '$variant'";
         mysqli_query($con, $sql) or die (mysqli_error($con));
      } else {
         // IF NONE, INSERT A NEW TRANSACTION
         $dateTimeTransaction = $datetime->format('Y-m-d H:i:s');;
         $sql = "INSERT INTO transaction (CustomerName, CustomerEmail, Address, Item, Variant, Quantity, Unitprice, Totalprice, DateTimeOrdered, Mop) VALUES ('$fullName', '$emailAdd', '$homeAddress', '$item', '$variant', '$orderedQuantity', '$unitprice', '$orderedTotal', '$dateTimeTransaction', '$Mop')";
         mysqli_query($con, $sql) or die (mysqli_error($con));
      }

      $con->close();
   ?>

   <div class="footer-basic">
      <footer>
         <div class="social">
            <h6>MADE WITH THESE AMAZING TECHS</h6>
            <a><i class="fab fa-html5"></i></a>
            <a><i class="fab fa-php"></i></a>
            <a><i class="fab fa-css3"></i></a>
            <a><i class="fab fa-js-square"></i></a>
            <a><i class="fab fa-bootstrap"></i></a>
         </div>

         <ul class="list-inline">
            <h8>The Tech Out are passionate about providing our customers with the best possible shopping experience.</h8>
         </ul>
         <p class="copyright">&reg; 2023. The Tech Out Company, Region 1, Philippines</p>
      </footer>
   </div>

</body>
</html>