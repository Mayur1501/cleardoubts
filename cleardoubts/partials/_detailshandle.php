<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';
    $user_id = $_SESSION['userid'];

    if ($_GET['id'] == "personal") {

        $name = $_POST['name'];
        $number = $_POST['pnumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $interest = $_POST['interest'];

        $sql = "UPDATE `personal` SET `user_id` = '$user_id', `name` = '$name', `phone_number` = '$number', `email_address` = '$email',
        `gender` = '$gender', `interest` = '$interest' WHERE `user_id` = '$user_id';";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = "Your update has been successfully";
            header("Location:../profile.php?loginsuccess=true&id=personal");
        }

    } elseif ($_GET['id'] == "educational") {
        $college = $_POST['college'];
        $department = $_POST['department'];
        $graduation = $_POST['gdate'];
        $enrollment = $_POST['enrollment'];

        $sql = "SELECT * FROM `educational` WHERE `user_eid`='$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $sql2 = "UPDATE `educational` SET `user_eid` = '$user_id', `college_name` = '$college', `department` = '$department',
            `graduation_year` = '$graduation',`enrollment` = '$enrollment' WHERE `user_eid` = '$user_id';";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                $showAlert = "Your update has been successfully";
                header("Location:../profile.php?loginsuccess=true&id=educational");
                exit;
            }
        } else {
            $sql2 = "INSERT INTO `educational` (`user_eid`, `college_name`, `department`, `graduation_year`, `enrollment`) VALUES ('$user_id', '$college', '$department', '$graduation', '$enrollment');";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                $showAlert = "Your update has been successfully";
                header("Location:../profile.php?loginsuccess=true&id=educational");
                exit;
            }
        }
    } elseif ($_GET['id'] == "professional") {
        $git = $_POST['git'];
        $linkedin = $_POST['linkedin'];
        $portfolio = $_POST['portfolio'];

        $sql = "SELECT * FROM `professionals` WHERE `user_id`='$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $sql2 = "UPDATE `professionals` SET `user_id` = '$user_id', `git_link` = '$git', `linkedin_link` = '$linkedin',
                `portfolio_link` = '$portfolio' WHERE `user_id` = '$user_id';";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                $showAlert = "Your update has been successfully";
                header("Location:../profile.php?loginsuccess=true&id=professional");
                exit;
            }
        } else {
            $sql2 = "INSERT INTO `professionals` (`user_id`, `git_link`, `linkedin_link`, `portfolio_link`) VALUES ('$user_id', '$git', '$linkedin', '$portfolio');";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                $showAlert = "Your update has been successfully";
                header("Location:../profile.php?loginsuccess=true&id=professional");
                exit;
            }
        }
    }
}
?>