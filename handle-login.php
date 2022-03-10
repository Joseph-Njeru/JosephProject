<?php


include "wartheader.php";

include "configuration.php";

//check if user is logged in using session
//session_start();
//if (isset($SESSION["loggedin"]) and $SESSION["loggedin"]===true){
// header("location:dashboard.php");
//  exit();
//}

if (isset($_POST["login"])) {

    $useremail = $_POST["emailaddress"];
    $user_password = $_POST["password"];

    $sql = "SELECT * FROM `employees` WHERE emailaddress = $useremail";


    $results = mysqli_query($link,$sql);


    if ($results) {
        $data = mysqli_num_rows($results);

    } else {
        echo "Error executing this query $sql" . mysqli_error($link);

        if ($data == 1) {

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $email_address = $row['email_address'];
                $hashed_password = $row['password'];

                //Verify Password
                if (password_verify($userpassword, $hashedpassword)) {
                    session_start();
                    $_SESSION["logged_in"] = true;
                    $_SESSION ["id"] = $id;
                    $_SESSION["username"] = $emailaddress;

                    header("location:ThePane.php");

                } else {
                    echo "Your password do not match";
                }

            }
        } else {
            echo "user was not found in the data base";

        }


    }


}
