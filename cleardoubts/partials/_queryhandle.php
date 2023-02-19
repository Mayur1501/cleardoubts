<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'partials/_dbconnect.php';
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $dept = $_POST['dept'];
    $sem = $_POST['sem'];
    $ctime = current_timestamp();

    $sql = "INSERT INTO queries (query_title, query_description, department, sem, query_time) VALUES ($title, $desc, $dept, $sem, $ctime)";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        die("dcldv");
        header("location:../queries.php?loginsuccess=true");
        exit;
    }
    else
    {
        die("ADSDSD");
        header("location:../queries.php?loginsuccess=true");
    }

}
?>