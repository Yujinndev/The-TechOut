<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
</head>
<body>
    <header class="header" id="header">
        <nav class="navbar container">
            <a href="homepage.php" class="brand">The Tech Out</a>
            <div class="burger" id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <span class="overlay"></span>
            <div class="menu" id="menu">
                <ul class="menu-inner">
                    <li><a class="menu-link" href="homepage.php?#home">Home</a></li>
                    <li><a class="menu-link" href="store.php">Store</a></li>
                    <li><a class="menu-link" href="homepage.php?#about">About</a></li>
                    <li><a class="menu-link" href="homepage.php?#contact">Contact Us</a></li>

                    <?php
                    session_start();

                    if (isset($_SESSION['fullName'])) {
                            // User is logged in, display their name and a logout button
                            $fullName = $_SESSION['fullName'];
                            echo "<a href='includes/logout.inc.php' onclick=\"return confirm('Are you sure you want to log out?');\"><img class='logout-img' src='assets/icons/Logout.png' title='User Logout' width='30px' height='30px' ></a>";
                    } else {
                            // User is not logged in, redirect to login page
                            header("Location: login.php");
                            exit;
                    }
                    ?>

                </ul>
            </div>
        </nav>
    </header>
</body>
</html>