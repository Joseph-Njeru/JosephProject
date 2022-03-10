<?php

include "wartheader.php";

include "configuration.php";

if (isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $firstname = $_POST["clocknumber"];
    $secondname = $_POST["secondname"];
    $emailaddtress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $confirmpassword = ["confirm password"];


    // Validation

    //password length
    if (strleg($password) < 6) {
        $passworderror = "password must have 6 characters";
        echo "$passworderror";
    } else {
        $storepass = password_hash($password, PASSWORD_DEFAULT);
    }

    //matching passwords
    if ($confirmpassword != $password) {
        $conpasserror = "passwords do not match";
        echo "$confirmpassword";
    }

    if (empty ($cpassworderror) and (empty($conpasserror))) {

        $sql = "INSERT INTO `employees`(`id`, `fullname`, `clocknumber`, `emailaddress`, `phonenumber`, `location`, `dob`, `gender`, `photo`, `cv`) 
    VALUES ('$id','$fullname','$clocknumber', '$emailaddress','$phonenumber','$location','$dob','$gender','$photoname','$cvname')";


        $results = mysqli_query($link, $sql);
        if ($results) {
            echo "You have been Registered";
            header("location: login.php");

        } else {
            echo "error executing this querry $sql" . mysqli_error($link);

        }
    }

// close my connection
    mysqli_close($link);

}


