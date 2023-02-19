<?php

echo'<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <title>Document</title>
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
        <nav class="navbar navbar-expand-md sticky-top" style="background-color:
            white">
            <div class="container-fluid">

                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" height="30px"
                        src="https://cdn-icons-png.flaticon.com/128/1004/1004742.png"
                        alt="logo">
                </a>


                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto p-0 p-sm-2" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="d-none d-sm-inline-block small">Menu</span>
                </button>


                <!-- Main navbar START -->
                <div class="navbar-collapse collapse d-flex align-item-center
                    justify-content-center" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll text-center ">
                        <li class="nav-item"> <a class="nav-link "
                                style="padding: 0.8rem 5rem" href="#home">Home</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                style="padding: 0.8rem 5rem" href="#about"
                                target="_blank">Notice</a></li>
                        <li class="nav-item"> <a class="nav-link "
                                style="padding: 0.8rem 5rem" href="#contact">Queries</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link"
                                style="padding: 0.8rem 5rem" href="#contact">Projects</a>
                        </li>
                    </ul>
                </div>
                <a href="partials/_logout.php" class="btn btn-outline-black"
                    style="background-color: #cac7ff">Logout</a>

                <button type="submit" class="btn btn-outline-dark ms-2"
                    style="background-color: #cac7ff;"
                    data-bs-toggle="modal" data-bs-target="#loginModal">Profile</button>
            </div>
        </nav>
        <div class="wrapper my-2">
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
                        <div class="col border border-dark text-center mx-2
                            ms-4" style="height: 50px; width: 10px;border: 1px
                            solid red; border-radius:10px ; padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-1</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-2</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-3</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-4</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-5</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-6</a>
                        </div>
                        <div class="col border border-dark text-center mx-2"
                            style="height: 50px; width: 10px;border-radius:10px;
                            padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-7</a>
                        </div>
                        <div class="col border border-dark text-center mx-2
                            me-4" style="height: 50px; width:
                            10px;border-radius:10px; padding: 10px 0px;">
                            <a href="#" style="text-decoration: none;"> Sem-8</a>
                        </div>
                    </div>
                </div>
                <div class="header d-flex justify-content-between ">
                    <p style="padding:15px 0 ;">Welcome!! Have a nice day.</p>
                    <p>
                        <button class="btn btn-hover ms-4 my-2" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseExample"
                            aria-expanded="false"
                            aria-controls="collapseExample">
                            Add Notice?
                        </button>
                    </p>
                </div>
                <div id="input" class="my-2">

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body container" style="max-width:
                            90%;">
                            <div class="mb-3">
                                <label for="Cname" class="form-label">Title</label>
                                <input type="text" class="form-control"
                                    name="title-name" id="title"
                                    placeholder="Enter Title" required>
                            </div>
                            <div class="mb-3">
                                <label for="Cname" class="form-label">Description</label>
                                <textarea type="text" class="form-control"
                                    name="notice-description" id="desc"
                                    placeholder="Enter Description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Cname" class="form-label">Department</label>
                                <select class="form-select" aria-label="Default
                                    select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Computer Engineering</option>
                                    <option value="2">Information Technology</option>
                                    <option value="3">Mechanical Engineering</option>
                                    <option value="3">Civil Engineering</option>
                                    <option value="3">Chemical Engineering</option>
                                    <option value="3">Electrical Engineering</option>
                                    <option value="3">Bio-Medical Engineering</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Cname" class="form-label">Attachment</label>
                                <input type="file" class="form-control"
                                    name="file-name" id="file" placeholder=""></input>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-hover"
                                id="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="info">
                <div class=" container border border-3 rounded p-3 my-2"
                    style="max-width: 90%;">
                    <div class="d-flex justify-content-between">
                        <h4>Regarding Pending Fees</h4>
                        <div>
                            <button type="button" class="btn" id="btn"><ion-icon
                                    name="share-outline" style="font-size:30px"></ion-icon></i></button>
                        <button type="button" class="btn" id="btn"><ion-icon
                                name="bookmark-outline" style="font-size:30px"></ion-icon></button>
                        <button type="button" class="btn" id="btn"><ion-icon
                                name="trash-outline" style="font-size:30px;
                                color: red;"></ion-icon></button>
                    </div>
                </div>
                <p class="fw-bold">Attention !!!!!</p>
                <p>Those Students Who have pending their Fees of Semester - 6
                    please Pay in the current week and
                    refer to GTU circular Letter for their Fees. If any Student
                    have any query then immediatley
                    contact to your assigned class co-ordinator.
                    <p>
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
?>'