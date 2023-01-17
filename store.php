<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    
    <title>TechOut Store</title>
 </head>
<body>
   <?php include 'includes/header.inc.php'; ?>
   
   <div class="pic-ctn">
      <img src="assets/images/builds-carousel/Build-1.jpg" alt="" class="pic">
      <img src="assets/images/builds-carousel/Build-2.jpg" alt="" class="pic">
      <img src="assets/images/builds-carousel/Build-3.jpg" alt="" class="pic">
      <img src="assets/images/builds-carousel/Build-4.jpg" alt="" class="pic">
      <img src="assets/images/builds-carousel/Build-5.webp" alt="" class="pic">
   </div>

   <?php
      include "includes/connect_database.inc.php";
      
      if (isset($_GET['fetch'])) {
         $search = $_GET['search'];
      }
   ?>

   <section id="products">
      <div class="parent">
         <div class="title">
            <h1>PRODUCTS SECTION</h1>
         </div>
         <div class="form">
            <form method="GET" action="">
               <div class="search-form">
                  <input type="search" name="search" class="search-input" value="<?php echo (isset($_GET['search']) ? $_GET['search'] : ''); ?>" placeholder="Search here ..." autocomplete="off">
                  <button type="submit" name="fetch" value="1"><span><i class="fa fa-search search-toggle"></i></span></button>
               </div> 
            </form>
         </div>
      </div>   
      <div class="container-card">  
         <?php 
            // get page number
            if (isset($_GET['page_no']) && $_GET['page_no'] !== "") {
               $page_no = $_GET['page_no'];
            } else {
               $page_no = 1;
            }

            //    total items to display
            $total_items = 20;  
            // offset used for query
            $offset = ($page_no - 1) * $total_items;
            // get previous page
            $previous_page = $page_no - 1;
            // get next page
            $next_page = $page_no + 1;

            // get total count of pages
            $result_count = mysqli_query($con, "SELECT COUNT(*) as total_records FROM products WHERE product_stock >= 1") or die (mysqli_error($con));
            $records = mysqli_fetch_array($result_count);
            $total_records = $records['total_records'];

            // get the total pages
            $total_pages = ceil($total_records / $total_items);
            if (!empty($search)) {
               $sql = "SELECT * FROM products WHERE product_stock >= 1 AND (product_name LIKE '$search%' OR product_name LIKE '%$search%' OR product_name LIKE '$search%')";
               $result = mysqli_query($con, $sql) or die (mysqli_error($con));
               if (mysqli_num_rows($result) == 0) { ?>
                  <h1 style="font-size: 3rem; text-align: center; padding: 7rem"> NO DATA FOUND, TRY AGAIN! </h1>
               <?php } 
            } 
            else {
               $sql = "SELECT * FROM products WHERE product_stock >= 1 LIMIT $offset, $total_items";
               $result = mysqli_query($con, $sql) or die (mysqli_error($con));
            }

            while($row = mysqli_fetch_array($result)) {
         ?>
         <div class="card" data-aos="zoom-out-up">
            <div class="ribbon ribbon-top-right"><span><?php echo random_int(5,20); ?>% Sale</span></div>
            <div class="head-image">
               <img src="assets/images/product-images/<?php echo $row['product_img-1']; ?>">
            </div>
            <div class="card-body">
               <div class="details"> 
                  <span class="tag"><?php echo $row['product_brand']; ?></span>   
                  <span class="category-tag
                  <?php 
                     if ($row['product_type'] == "GPU") { 
                        echo  " tag-purple";
                     } 
                     else if ($row['product_type'] == "Motherboard") { 
                        echo " tag-teal";
                     } 
                     else if ($row['product_type'] == "RAM") { 
                        echo " tag-red";
                     } 
                     else if ($row['product_type'] == "CPU") { 
                        echo " tag-orange";
                     } 
                     else if ($row['product_type'] == "Monitor") { 
                        echo " tag-pink";
                     } 
                     else if ($row['product_type'] == "SSD") { 
                        echo " tag-green";
                     } 
                     else if ($row['product_type'] == "PSU") { 
                        echo " tag-yellow";
                     } 
                     else if ($row['product_type'] == "PC Fan") { 
                        echo " tag-blue";
                     } 
                  ?>">  <?php echo $row['product_type']; ?></span>     
                  <h1><a href="product.php?id=<?php echo $row['ID'];?>"> <?php echo $row['product_name']; ?>  <br>
                  <strong><?php echo "Php " . number_format($row['product_price'], 2, '.', ',')?></strong> </a></h1>
                  <p> <?php echo $row['product_desc']; ?> </p>   
               </div>
            </div>  
         </div>
      <?php } 
         mysqli_close($con); ?>     
      </div> 
      <?php if (empty($search)) { ?>
         <div class="pages-details">               
            <nav class="m-3" aria-label="Page navigation example">
               <ul class="pagination">
                  <li class="p-10 page-item"><a class="page-link <?= ($page_no <= 1 ) ? 'disabled' : ''; ?> " 
                  <?= ($page_no > 1 ) ? 'href=?page_no=' . $previous_page : '';?>>Prev</a></li>

               <?php 
                  for ($counter = 1; $counter <= $total_pages; $counter++) {
               ?>
                  <li class="page-item"><a class="page-link" href="?page_no=<?= $counter; ?>"> 
                  <?= $counter; ?> </a></li>

               <?php } ?>
                  <li class="page-item"><a class="page-link <?= ($page_no >= $total_pages ) ? 'disabled' : '';?> " 
                  <?= ($page_no < $total_pages ) ? 'href=?page_no=' . $next_page : ''; ?>>Next</a></li>
               </ul>
            </nav>
   
            <div class="p-10 mt-4">
               <h8 class="text-dark"><em>// Page <?= $page_no ?> of <?= $total_pages; ?> ~</em</h8>
            </div>
         </div>   
      <?php } ?>   
   </section> 

   <a href="store.php" class="float" title="Show All Items">
      <i class="fas fa-undo fa-2x my-float"></i>
   </a>

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

   <script src="js/styling.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init();
      const cols = document.querySelectorAll('.card');
      cols.forEach((col, index) => {
         col.setAttribute('data-aos-delay', `${index * 100}`);
      });
   </script>
</body>
</html>