<?php
session_start();
include 'partials/_header.php';

echo '<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
        <title>Projects</title>
        <style>
        body {
            overflow-x: hidden;
        }
        </style>
        <link rel="stylesheet" href="css/nstyle.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>

    <body>

        <div class="wrapper">
            <div class="sidebar">
                <h3>Department</h3>
                <ul style="padding-left:0px;">
                    <li><a href="#">General</a></li>
                    <li><a href="#">Computer</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Mechanical</a></li>
                    <li><a href="#">Civil</a></li>
                    <li><a href="#">Chemical</a></li>
                    <li><a href="#">Electrical</a></li>
                    <li><a href="#">Bio-Medical</a></li>
                </ul>
            </div>

            <div class="main_content mt-2">
                <div>
                    <div class="row">
                        <ul class="nav nav-tabs ms-4">
                            <li class="nav-item"><a class="nav-link ';echo
                                    (!isset($_GET['sem']) or $_GET['sem'] ==
                                    '1') ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=1">Sem-1</a>
                            </li>
                            <li class="nav-item"><a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '2')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=2">Sem-2</a>
                            </li>
                            <li class="nav-item"><a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '3')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=3">Sem-3</a>
                            </li>
                            <li class="nav-item"><a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '4')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=4">Sem-4</a>
                            </li>
                            <li class="nav-item"><a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '5')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=5">Sem-5</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '6')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=6">Sem-6</a>
                            </li>
                            <li class="nav-item"><a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '7')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=7">Sem-7</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link ';echo
                                    (isset($_GET['sem']) && $_GET['sem'] == '8')
                                    ? 'active" style="background-color:
                                    #cac7ff;"' : '" style="color:black;"';
                                    echo'"
                                    href="/cleardoubts/queries.php?loginsuccess=true&sem=8">Sem-8</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header d-flex justify-content-between ">
                    <p style="padding:15px 0 ;">Welcome!! Have a nice day.</p>
                    <p>
                        <button class="btn btn-outline-dark ms-4 my-2" style="background-color: #cac7ff;" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseExample"
                            aria-expanded="false"
                            aria-controls="collapseExample">
                            Add Project?
                        </button>
                    </p>
                </div>
                <div id="input" class="my-2">

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body container" style="max-width:90%;background-color:transparent;">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control"
                                    name="title-name" id="title"
                                    placeholder="Enter project title" required>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea type="text" class="form-control"
                                    name="notice-description" id="desc"
                                    placeholder="Enter brief description..."
                                    required></textarea>
                            </div>
                            <div  class="mb-3 row ">
                        <div class="mb-3 col abc">
                            <label for="depat" class="form-label">Department</label>
                            <select class="form-select" aria-label="Default select example" id="depat">
                            <option selected disable hidden>Open this select menu</option>

                                <option value="1" selected>General</option>
                                <option value="2">Computer Engineering</option>
                                <option value="3">Information Technology</option>
                                <option value="4">Mechanical Engineering</option>
                                <option value="5">Civil Engineering</option>
                                <option value="6">Chemical Engineering</option>
                                <option value="7">Electrical Engineering</option>
                                <option value="8">Bio-Medical Engineering</option>
                            </select>
                        </div>
                        <div class="mb-3 col abc">
                            <label for="sem" class="form-label">Semester</label>
                            <select class="form-select" aria-label="Default select example" id="sem">
                            <option selected disable hidden>Open this select menu</option>

                                <option value="1">Sem-1</option>
                                <option value="2">Sem-2</option>
                                <option value="3">Sem-3</option>
                                <option value="4">Sem-4</option>
                                <option value="5">Sem-5</option>
                                <option value="6">Sem-6</option>
                                <option value="7">Sem-7</option>
                                <option value="8">Sem-8</option>
                            </select>
                        </div>
                            <div class="mb-3">
                                <label for="Cname" class="form-label">Project-link</label>
                                <input type="link" class="form-control"
                                    name="file-name" id="file" placeholder=""></input>
                        </div>
                        <div class="mb-3">
                        <a href="/cleardoubts/project.php?loginsuccess=true" class="btn btn-outline-dark mx-2" style="background-color: #cac7ff;" >Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="info">
                <div class=" container border border-3 rounded p-3 my-2"
                    style="max-width: 90%;">
                    <div class="d-flex justify-content-between">
                        <h4>E-commerce Website</h4>
                        <div>
                            <button type="button" class="btn" id="btn"><a
                                    href="https://github.com/thockin/test/commit/92a71588d4873dc82e7179ae1ebd97102e31d4e0"
                                    target="_blank"><ion-icon
                                        name="share-outline"
                                        style="font-size:30px"></ion-icon></i></a></button>
                        <button type="button" class="btn" id="btn"><ion-icon
                                name="bookmark-outline"
                                style="font-size:30px"></ion-icon></button>
                        <button type="button" class="btn" id="delete"><ion-icon
                                name="trash-outline"
                                style="font-size:30px; color: red;"></ion-icon></button>
                    </div>
                </div>

                <p>We are from IT department and our project is about E-commerce
                    website. we are glad to share this
                    project with you. In this project we have implemented
                    responsive website using
                    HTML,CSS,JavaScript and Bootstrap in front-end and PHP with
                    backend.
                    <p>
                        <p>
                            <a
                                href="https://github.com/thockin/test/commit/92a71588d4873dc82e7179ae1ebd97102e31d4e0"
                                target="_blank">Link</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>

</html>';
?>