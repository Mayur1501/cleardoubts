<?php
session_start();
$user_id = $_SESSION['userid'];
include 'partials/_header.php';
// include 'partials/_dbconnect.php';
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Profile-Section</title>
</head>
<style>
input,textarea{
    background-color:#f0f0ff !important;
}
</style>

<body>
    <!-- header section -->

    <header class="container my-3">
        <div class="container">
            <h1 class="text-center">Please fill your information here.</h1>
        </div>
        <!-- navbar Section -->
        <ul class="nav nav-tabs" >
            <li class="nav-item">';
if (!isset($_GET['id']) or $_GET['id'] == "personal") {
    echo '<a class="nav-link active" style="background-color: #cac7ff;" aria-current="page" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=personal">Personal</a>';} else {
    echo '<a class="nav-link" style="color:black;" aria-current="page" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=personal">Personal</a>';}

echo '</li>
            <li class="nav-item">';
if (isset($_GET['id']) && $_GET['id'] == "educational") {
    echo '<a class="nav-link active" style="background-color: #cac7ff;" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=educational">Educational</a>';} else {
    echo '<a class="nav-link" style="color:black;" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=educational">Educational</a>';}
echo '</li>
                    <li class="nav-item">';
if (isset($_GET['id']) && $_GET['id'] == "professional") {
    echo '<a class="nav-link active" style="background-color: #cac7ff;" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=professional">professional</a>';} else {
    echo '<a class="nav-link" style="color:black;" href="' . $_SERVER["PHP_SELF"] . '?loginsuccess=true&id=professional">professional</a>';}
echo '</li>
        </ul>
    </header>
    <!-- Personal Data Section of the Page -->';
if (!isset($_GET['id']) or $_GET['id'] == "personal") {

    $sql = "SELECT * FROM `personal` WHERE `user_id`='$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sex = $row['gender'];

    echo '<form action="/cleardoubts/partials/_detailshandle.php?loginsuccess=true&id=personal" method="post">
        <div class="container  my-3" id="personal">
            <h2>Personal Details</h2>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                <script type="text/javascript">
                    document.getElementById("name").setAttribute("value","' . $row['name'] . '");
                </script>
            </div>
            <div class="mb-3">
                <label for="pnumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="pnumber" id="pnumber" placeholder="Enter Your Number">
                <script type="text/javascript">
                    document.getElementById("pnumber").setAttribute("value","' . $row['phone_number'] . '");
                </script>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                <script type="text/javascript">
                    document.getElementById("email").setAttribute("value","' . $row['email_address'] . '");
                </script>
            </div>
            <div class="mb-3 ">
                <label for="flexRadioDefault1" class="form-label">Gender</label>
                <div class="form-check form-check-inline ms-3">
                    <input class="form-check-input no" type="radio" name="gender" value="male"';echo ($sex == 'male') ? 'checked' : ''; 
                     echo' id="flexRadioDefault1">
                    <label class="form-check-label " for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input no" type="radio" name="gender" value="female"';echo ($sex == 'female') ? 'checked' : '';
                    echo'  id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input no" type="radio" name="gender" value="other"';echo ($sex == 'other') ? 'checked' : '';
                    echo'  id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Other
                    </label>
                </div>
            </div>
            <div class="mb-3 minh-100vw ">
                <label for="interest" class="form-label">Your Interest</label>
                <textarea class="form-control" id="interest" rows="3" value="interest" name="interest"></textarea>
                <script>
                    var x = document.getElementById("interest");
                    x.value = "'.$row['interest'].'";
                </script>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark mb-2" style="background-color: #cac7ff;">Submit</button>
            </div>
        </div>
    </form>';
} elseif ($_GET['id'] == "educational") {

    $sql = "SELECT * FROM `educational` WHERE `user_eid`='$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $college=$row['college_name'];
        $department=$row['department'];
        $year=$row['graduation_year'];
        $enrollment=$row['enrollment'];
    }

    echo '   <!-- Educaional details of the Page -->
    <form action="/cleardoubts/partials/_detailshandle.php?loginsuccess=true&id=educational" method="post">
        <div class="container  my-3" id="educational">
            <h2>Educational Details</h2>
            <div class="mb-3">
                <label for="cname" class="form-label">College</label>
                <input type="text" class="form-control" name="college" id="cname" placeholder="Enter Your College Name">
                <script type="text/javascript">
                    document.getElementById("cname").setAttribute("value","';echo ($college != '') ? $college : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
                <label for="dname" class="form-label">Department</label>
                <input type="text" class="form-control" name="department" id="dname" placeholder="Enter Your Department">
                <script type="text/javascript">
                    document.getElementById("dname").setAttribute("value","';echo ($department != '') ? $department : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
            <label for="gdate" class="form-label">Graduation Year</label>
            <input type="year" class="form-control" name="gdate" id="gdate" placeholder="Enter your graduation year">
            <script type="text/javascript">
                document.getElementById("gdate").setAttribute("value","';echo ($year != '0') ? $year : '';
                echo'");
            </script>
            </div>
            <div class="mb-3">
                <label for="enumber" class="form-label">Enrollment Number</label>
                <input type="tel" class="form-control" name="enrollment" id="enumber" placeholder="Enter Your Enrollment Number">
                <script type="text/javascript">
                    document.getElementById("enumber").setAttribute("value","';echo ($enrollment != '0') ? $enrollment : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark mb-2" style="background-color: #cac7ff;">Submit</button>
            </div>
        </div>
    </form>';
} elseif ($_GET['id'] == "professional") {

    $sql = "SELECT * FROM `professionals` WHERE `user_id`='$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $git=$row['git_link'];
        $linkedin=$row['linkedin_link'];
        $portfolio=$row['portfolio_link'];
    }

    echo '<form action="/cleardoubts/partials/_detailshandle.php?loginsuccess=true&id=professional" method="post">
        <div class="container my-3" id="professional">
            <h2>Professional Details</h2>
            <div class="mb-3">
                <label for="git" class="form-label">GitHub</label>
                <input type="url" class="form-control" name="git" id="git" placeholder="Enter the link">
                <script type="text/javascript">
                    document.getElementById("git").setAttribute("value","';echo ($git != '') ? $git : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
                <label for="linkedin" class="form-label">Linked-In</label>
                <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="Enter the link" >
                <script type="text/javascript">
                    document.getElementById("linkedin").setAttribute("value","';echo ($linkedin != '') ?$linkedin : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
                <label for="portfolio" class="form-label">Portfolio</label>
                <input type="url" class="form-control" name="portfolio" id="portfolio" placeholder="Enter the link" >
                <script type="text/javascript">
                    document.getElementById("portfolio").setAttribute("value","';echo ($portfolio != '') ? $portfolio : '';
                    echo'");
                </script>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark mb-2" style="background-color: #cac7ff;">Submit</button>
            </div>
        </div>
    </form>';}

echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
';
