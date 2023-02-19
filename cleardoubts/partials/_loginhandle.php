<?php
$showError = "false";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';

    $login_id = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    $sql = "SELECT * FROM `personal` WHERE `email_address`='$login_id';";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($login_password, $row['password'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['userid'] = $row['user_id'];
            header("location:/cleardoubts/profile.php?loginsuccess=true");
            exit;
        } else {
            $loginError = "Your password is incorrect.";
        }
    } else {
        $loginError = "You didn't registered yet. Please create your account.";
    }
    header("location: ../index.php?loginsuccess=false&error=$loginError");

}
