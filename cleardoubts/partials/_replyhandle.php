<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    include '_dbconnect.php';
    echo "no";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $reply = $_POST['reply'];
        $cid = $_GET['cid'];
        $tid = $_GET['threadid'];
        $user = $_SESSION['username'];
        $_SESSION['replied'] = false;

        $sql = "INSERT INTO `replies` (`reply_content`, `reply_on`,`reply_by`, `reply_time`) VALUES ('$reply', '$cid', '$user',current_timestamp());";
        $result = mysqli_query($conn, $sql);
        echo $result;
        if($result){
            $_SESSION['replied'] = true;
            header("Location: ../thread.php?threadid=$tid&reply=false");
        }

    }

}
