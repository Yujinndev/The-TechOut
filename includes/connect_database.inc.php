<?php

 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "the_tech_out";

 $con = new mysqli($host, $username, $password, $database);

 if ($con->connect_error) {
    die ($con->connect_error);
 }

 return $con;
?> 