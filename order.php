<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/order.css">

    <title>Order Details</title>
</head>
<body>
    <?php 
        include "includes/header.inc.php";
        include "includes/connect_database.inc.php";
 
        if (isset($_SESSION['fullName'])) {
            $fullName = $_SESSION['fullName'];
            $emailAdd = $_SESSION['emailAdd'];
        } else {
            header("Location: login.php");
            exit;
        }

        $id = $_GET['id'];
        $option = $_GET['option'];
        $quantity = $_GET['quantity'];

        $sql = "SELECT * FROM products WHERE ID = $id";
        $result = mysqli_query($con, $sql) or die (mysqli_error($con));
        $row = mysqli_fetch_assoc($result);
    ?>

    <div class="parent-container">
        <div class="box-container">
            <img src="assets/images/order-logo.png">
            <div class="details">
                <div class="desc">
                    <h2>Your Order Summary</h2>
                    <p>Thank you for choosing Tech Out for your technology needs. Your support is greatly appreciated.</p>
                </div>
                <div class="order-details">
                    <div class="parent">
                        <div class="order-box">
                            <img src="assets/images/product-images/<?php echo $row['product_img-1'];?>" alt="">
                            <h3>
                                (<?php echo $quantity; ?>)
                                <?php echo $row['product_name'];?> <br>
                                <strong> <?php echo $option; ?> // <?php echo "Php " . number_format($row['product_price'], 2, '.', ',')?></strong> <br>
                                <?php $total = floatval($quantity) * floatval($row['product_price']); ?>
                                <span>Total: <?php echo "Php ". number_format($total, 2, '.', ',') ?> </span>
                            </h3>
                            </div>
                            <h4>Cash on Delivery</h4>
                        </div>
                    </div>
                </div>
                <div class="customer-details">
                    <?php 
                        $sql2 = "SELECT * FROM users WHERE emailAdd = '$emailAdd'";
                        $result = mysqli_query($con, $sql2) or die (mysqli_error($con));
                        $row2 = mysqli_fetch_assoc($result);
                    ?>

                    <p><span>To be delivered to:<br> <i class='fas fa-user-alt'></i> &ensp;<?php echo $row2['fullName'] ."  ~  ". $row2['homeAddress'];?></span></p>
                </div>
                <div class="btn">
                    <a href="confirmation.php?id=<?php echo $row['ID'] . "&qty=" . $quantity . "&ttl=" . $total . "&opt=" . $option .""?>" class="btn-proc" onclick="return confirm('Proceed Checking out?');">Confirm, Check Out</a>
                    <a href="product.php?id=<?php echo $row['ID'] ?>" class="btn-cancel">Cancel Order</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>