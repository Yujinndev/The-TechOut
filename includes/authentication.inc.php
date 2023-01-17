<?php 
  session_start(); 
  include "connect_database.inc.php";

    if (isset($_POST['emailAdd']) && isset($_POST['passWord'])) {
        // If it Returns true
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $emailAdd = validate($_POST['emailAdd']);
        $passWord = validate($_POST['passWord']);

        if (empty($emailAdd) || empty($passWord)) {
            // If it Returns true
            header("Location: ../login.php?empty-input");
            exit();

        } else {
            // If it Returns false
            $sql = " SELECT * FROM users WHERE emailAdd = '$emailAdd' AND passWord ='$passWord' ";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) === 1) {
                // If it Returns true
                $row = mysqli_fetch_assoc($result);

                if ($row['emailAdd'] === $emailAdd && $row['passWord'] === $passWord) {
                    // If it Returns true
                    $_SESSION['fullName'] = $row['fullName'];
                    $_SESSION['emailAdd'] = $row['emailAdd'];
                    $_SESSION['homeAddress'] = $row['homeAddress'];
                    
                    header("Location: ../homepage.php");
                    exit();
                } 

            } else {
                // If it Returns false
                header("Location: ../login.php?no-data-found");
                exit();
            }
        }

    } else {
        // If it Returns false
        header("Location: ../login.php");
        exit();

    }
?>    