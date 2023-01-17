<?php

 if (isset($_POST["fullName"])) {
    $connect = new PDO("mysql:host=localhost; dbname=the_tech_out", "root", "");
    $success = '';

    $fullName = $_POST["fullName"];
    $homeAddress = $_POST["homeAddress"];
    $emailAdd = $_POST["emailAdd"];
    $passWord = $_POST["passWord"];
    $passWord2 = $_POST["passWord2"];

    $fullName_error = '';
    $homeAddress_error = '';
    $emailAdd_error = '';
    $passWord_error = '';
    $passWord2_error = '';

    if (empty($fullName)) {
        $fullName_error = 'Full Name is Required';
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $fullName)) {
        $fullName_error = 'Only Letters and White Space Allowed';
    }

    if (empty($homeAddress)) {
        $homeAddress_error = 'Address is Required';
    }

    if (empty($emailAdd)) {
        $emailAdd_error = 'Email Address is Required';
    } else if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
        $emailAdd_error = 'Email Address is invalid';
    }

    if (empty($passWord)) {
        $passWord_error = 'Password is Required';
    } else if ( ! preg_match("/[a-z]/i", $passWord)) {
        $passWord_error = 'It must contain at least one letter';
    } else if ( ! preg_match("/[0-9]/", $passWord)) {
        $passWord_error = 'It must contain at least one number';
    } else if (strlen($passWord) < 8) {
        $passWord_error = 'Password must be at least 8 characters';
    }

    if (empty($passWord2)) {
        $passWord2_error = 'Re-enter your Password';
    } else if (( $passWord !== $passWord2)) {
        $passWord2_error = 'Passwords must match';
    }

    if ($fullName_error == '' && $homeAddress_error == '' && $emailAdd_error == '' && $passWord_error == '' && $passWord2_error == '') {
        $data = array(
            ':fullName'         =>    $fullName,
            ':homeAddress'      =>    $homeAddress,
            ':emailAdd'         =>    $emailAdd,
            ':passWord'         =>    $passWord
        );

        $query = "
		INSERT INTO users 
		(fullName, homeAddress, emailAdd, passWord) 
		VALUES (:fullName, :homeAddress, :emailAdd, :passWord)
		";

        $statement = $connect->prepare($query);
        $statement->execute($data);

        $success = '<div class="alert alert-success">Registration Successful!</div>';
    }

    $output = array(
        'success'           =>    $success,
        'fullName_error'    =>    $fullName_error,
        'homeAddress_error' =>    $homeAddress_error,
        'emailAdd_error'    =>    $emailAdd_error,
        'passWord_error'    =>    $passWord_error,
        'passWord2_error'   =>    $passWord2_error
    );

    echo json_encode($output);
 }
