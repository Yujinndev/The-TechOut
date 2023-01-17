<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/product.css">
    
    <title>Product Details</title>
 </head>

<body>
    
    <?php 
        include 'includes/header.inc.php'; 
        include "includes/connect_database.inc.php";
        $id = $_GET['id'];

        $sql = "SELECT * FROM products WHERE ID = $id;";
        $result = mysqli_query($con, $sql) or die (mysqli_error($con));
        $row = mysqli_fetch_assoc($result);
        $availableQuantity = $row['product_stock'];
        
    ?>
    <input type="hidden" id="availableQuantity" value="<?php echo $availableQuantity; ?>">

    <main class="main grid">

        <div class="home">
            
        <button class="back" onclick="window.location.href = document.referrer;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
          <!-- ===== IMAGES AND COMPONENTS ===== -->
            <div class="image">
                
                <div class="product_image"></div>

                <div>
                    <img src="assets/images/product-images/<?php echo $row['product_img-1']; ?>" 
                    class="image-option shows" color="#bea64f">
                    <img src="assets/images/product-images/<?php echo $row['product_img-2']; ?>" 
                    class="image-option" color="#006468">
                </div>

                <div class="option-picks">
                    <span class="option-pick active first" primary="#bea64f" color="#bea64f"></span>
                    <span class="option-pick second" primary="#006468" color="#006468"></span>
                </div>
            </div>

          <!-- ===== PRODUCT DETAILS/INFORMATION ===== -->  
            <div class="details">
                <div class="data">
                    <span class="product_brand"><?php echo $row['product_brand']; ?></span>
                    <span class="product_type"><?php echo $row['product_type']; ?></span>
                    
                    <h1 class="title"><?php echo $row['product_name']; ?></h1>
                    <p class="desc">&emsp; ~ <?php echo $row['product_desc']; ?></p>
                </div>

              <!-- ===== OPTIONS AND QUANTITY ===== -->
                <div class="actions">
                    <div class="option">
                        <h3 class="option-title">Options</h3>
                        <div class="size-content">
                            <span class="options active"> <?php echo $row['product_option-1']; ?> </span>
                            <span class="options"><?php echo $row['product_option-2']; ?></span>
                            <span class="options"><?php echo $row['product_option-3']; ?></span>
                        </div>
                    </div>

                    <div class="quantity">
                        <h3 class="quantity-title">Quantity</h3>
                        <div class="quantity-content">
                            <span class="minus">-</span>
                            <span class="quantity a">1</span>
                            <span class="plus">+</span>
                        </div>
                        
                        <span class="availableQty">Available: <?php echo $availableQuantity ?></span>
                    </div>
                </div>

                <!-- ===== PRICE SECTION ===== -->
                <script>
                    function getvalue() {
                        var activeOption = document.querySelector(".options.active").textContent;
                        var quantity = document.querySelector(".quantity.a").textContent;
                        fetch("order.php?id=<?php echo $row['ID'];?>", {
                            method: "POST",
                            body: JSON.stringify({ option: activeOption, quantity: quantity }),
                            headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                            }
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);
                            window.location.href = "order.php?id=<?php echo $row['ID'];?>&option="+activeOption+"&quantity="+quantity; 
                        });
                    }
                </script>

                <div class="price">
                    <span class="price-title">Php <?php echo number_format($row['product_price'], 0, '.', ',')?></span>
                    <a class="price-button" onclick="getvalue()"><i class='fas fa-credit-card'></i>&ensp;Order Now!</a>
                </div>
            </div>
        </div>
    </main>  

    <script src="js/product.js"></script>
</body>
</html>