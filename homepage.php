<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css">
    <link rel="stylesheet" href="css/homepage.css">

    <title>TechOut Store</title>
 </head>

<body>
  <?php include 'includes/header.inc.php'; ?>

  <!-- ===== HOME SECTION ===== -->
  <section id="home">
    <div class="wrapper">
        <div class="text">
          <?php echo "<p style=\"font-size: 1.5rem\"><em>Welcome, <b>$fullName!</b></p>"; ?>
          <h1>The Tech Out</h1></em>
          <p>The Tech Out are passionate about providing our customers with the best possible shopping experience.  
            We pride ourselves on offering the highest quality products and services at competitive prices. 
            We understand that shopping for technology can be overwhelming, which is why we are here to guide you 
            every step of the way..</p>
          <a href="store.php"> STORE ~ I'LL TECH YOU OUT! <img src="assets/icons/Arrow.png"></a>
        </div>
        <div class="hero">
          <img src="assets/images/Hero-img.png" alt="img" />
        </div>
    </div>
  </section>
  
  <!-- ===== ABOUT SECTION ===== -->
  <section id="about">
    <h1>ABOUT US</h1>
      <div class="parent">
    <?php 
      include "includes/connect_database.inc.php";

      $sql = "SELECT * FROM creators";
      $result = mysqli_query($con, $sql) or die (mysqli_error($con));
      while($row = mysqli_fetch_array($result)) { ?>
        <div class="column" data-aos="zoom-in">
          <img src="assets/creators/<?php echo $row['Image']; ?>">
          <h2><?php echo $row['Fullname']; ?></h2>
          <h3><?php echo $row['Role']; ?>, <?php echo $row['CourseYear']; ?></h3>
          <p><?php echo $row['About']; ?></p>
        </div>
    <?php } ?>
  </section>

<!-- CONTACT US SECTION -->
   <section id="contact">
      <h1>CONTACT US</h1>
      <div class="contact-container" data-aos="zoom-in">
        <div class="form-container">
          <div class="header">
            <h3>Send us a message?</h3>
          </div>
            
          <form action="includes/contact_form.inc.php" method="post">
            <div class="form-control">
              <input class="input" name="cName" type="text" placeholder=" " autocomplete="off" />
                <div class="space-title"></div>
              <label for="cName" class="placeholder">Your Name</label>
            </div>

            <div class="form-control">
              <input class="input" name="cEmail" type="email" placeholder=" " autocomplete="off" />
                <div class="space-title"></div>
              <label for="cEmail" class="placeholder">Your Email</label>
            </div>              
                     
            <div class="form-control">
              <input class="input" name="cSubject" type="text" placeholder=" " autocomplete="off" />
                <div class="space-title subject"></div>
              <label for="cSubject" class="placeholder">TheSubject</label>
            </div>    
            
            <div class="form-control">
              <textarea name="cMessage" type="text" placeholder=" " autocomplete="off"></textarea>
                <div class="space-title"></div>
              <label for="cMessage" class="placeholder">Messages</label>
            </div>             

            <div class="login-container">                    
              <br/><br/> 
              <input type="Submit" name="submit" id="submit">
                <?php 
                  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "email-unsuccessful") == true) {
                      echo " <br/> 
                      <span class=\"msg\">Unable to send, check for possible errors!</span>";
                    } 
                    else if (strpos($fullUrl, "email-successful") == true) {
                      echo " <br/> 
                      <span class=\"msg\">Email Sent!</span>";
                    }
                    else if (strpos($fullUrl, "empty-fields") == true) {
                      echo " <br/> 
                      <span class=\"msg\">Please fill in all fields!</span>";
                    }
                ?> 
            </div>  
          </form>
        </div>
      </div>    
    </section>

   <script src="js/styling.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script> 
    AOS.init(); 
    const cols = document.querySelectorAll('.column');
    cols.forEach((col, index) => {
      col.setAttribute('data-aos-delay', `${index * 500}`);
    });

   </script>
</body>
</html>