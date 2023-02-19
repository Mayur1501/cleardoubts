<?php
$showError = "false";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';
    $username = $_POST['username'];
    $user_email = $_POST['signupemail'];
    $user_password = $_POST['signup_password'];
    $user_cpassword = $_POST['signup_cpassword'];

    // * Check whether user is already exist or not
    $exist_sql = "SELECT * FROM `personal` WHERE `email_address`='$user_email'";
    $exist_result = mysqli_query($conn, $exist_sql);

    $exist_num_rows = mysqli_num_rows($exist_result);

    if ($exist_num_rows > 0) {
        $showError = "Email is already used.";
    } else {

        if ($user_password == $user_cpassword) {
            $hash_pass = password_hash($user_password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `personal` (`name`, `phone_number`, `email_address`, `password`, `gender`, `interest`) VALUES ('$username', '', '$user_email', '$hash_pass', '', '');";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
                header("location: ../index.php?signupsuccess=true");
                exit;
            }

        } else {
            $showError = "Passwords are not matching.";
        }
    }
    header("location: ../index.php?signupsuccess=false&error=$showError");

}

?>