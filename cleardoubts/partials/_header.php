<?php
include "partials/_signupmodal.php";
include "partials/_loginmodal.php";
include "partials/_dbconnect.php";
echo '
<style>
  
  body{
    background:url("images/background.png") no-repeat;
    background-size:cover;
  }
  input,textarea,select{
    background-color:#f0f0ff !important;
  }
  
  .nav-a{
    color:black !important;
    padding:0.8rem 5rem !important;
  }

  .activate {
    display: inline-block;
    position: relative;
    color: #0087ca;
  }
  
  .activate::after {
    content: "";
    position: absolute;
    width: 30%;
    transform: scaleX(0);
    height: 3px;
    bottom: 3px;
    left: 35%;
    background-color: #a49fff;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }
  
  .activate:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }


</style>
<style   href="/css/nstyle.css"></style>
<nav class="navbar navbar-expand-md sticky-top" style="background-color: #cac7ff;">
        <div class="container-fluid">

        <!-- Logo START -->
            <a class="navbar-brand" href="index.html">
                <img class="light-mode-item navbar-brand-item" height="30px" src="https://cdn-icons-png.flaticon.com/128/1004/1004742.png" alt="logo">
            </a>


            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>';

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            echo '<!-- Main navbar START -->
            <div class="navbar-collapse collapse d-flex justify-content-center"  id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll" >
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="/cleardoubts/home.php?loginsuccess=true">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="/cleardoubts/notice.php?loginsuccess=true"/>Notice</a> </li>
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="/cleardoubts/queries.php?loginsuccess=true">Queries</a> </li>
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="/cleardoubts/project.php?loginsuccess=true">Project</a> </li>
                </ul>
            </div>';
          }else{

            echo '<div class="navbar-collapse collapse d-flex justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll">
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="#home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="#about">About</a> </li>
                    <li class="nav-item"> <a class="nav-link nav-a activate" href="#contact">Contact</a> </li>
                </ul>
            </div>';
          }

                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                    echo'<a href="profile.php" class="btn btn-outline-dark mx-2" style="background-color: #cac7ff;" >Profile</a>
                         <a href="partials/_logout.php" class="btn btn-outline-dark" style="background-color: #cac7ff;" >Logout</a>';
                }
                else{
                    echo'
                    <button type="submit" class="btn btn-outline-dark" style="background-color: #cac7ff;"  data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
                    <button type="submit" class="btn btn-outline-dark ms-2" style="background-color: #cac7ff;" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    ';
                }
            echo'

        </div>
    </nav>';

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
         <strong>Success!</strong> Your account has been created successfully.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
} elseif (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] != "true") {
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
         <strong>Error!</strong> ' . $_GET['error'] . '
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
} elseif (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] != "true") {
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
         <strong>Error!</strong> ' . $_GET['error'] . '
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
}


?>