<?php
session_start();
include 'partials/_header.php';
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js" ></script>
</head>

<style>
    .recent{
        margin-top: 15px;
        margin-bottom: -4rem;
    }

    .sliding{
        margin: 0;
        padding: 0;
        color: #222;
        display: flex;
        align-items: center;
        background-color: transparent;
        justify-content: center;
        margin-top: 5rem;
        min-height: 35vh;
    }

    ul{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .caraousel{
        position: relative;
        overflow: hidden;
        background-color: rgb(212,251,0);
        background: linear-gradient(10deg,#cac7ff, #9c9ad1);
        box-shadow: 5px 10px 30px rgba(255,255,255,0.15);
    }

    .caraousel_slider{
        position: relative;
        display: flex;
        align-items: center;
        width: 80vw;
        border-radius: 8px;
        height: 250px;
    }

    .caraousel_list{
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
        justify-content:space-around;
    }

    span{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 250px;
        height: 200px;
    box-sizing: border-box;
    background-color: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    }


    .carousel__item:hover {
        transform: scale(1.1);
        /* font-size: 30px; */
        background-color: rgba(219, 177, 236, 0.8);
    }
</style>


<body>
    <div class="container px-4 my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card border" >
                    <div class="card-header text-center" style="background-color:#e5e5ff">
                        <i class="fa fa-bell" style="font-size:20px"></i>
                        NOTICE
                    </div>
                    <div class="card-body" style="background-color:#dedcfe;">
                        <h5 class="card-title">What is Notice?</h5>
                        <p class="card-text">This section will show current affairs within college premises.Here you can
                            see digitally all pasted document of your college notice board. </p>
                        <a href="/cleardoubts/notice.php?loginsuccess=true"  class="btn btn-outline-dark" style="background-color: #cac7ff;" type="button">Explore...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center" style="background-color:#e5e5ff">
                        <i class="fa fa-question-circle" style="font-size:22px"></i>
                        QUERIES
                    </div>
                    <div class="card-body" style="background-color:#dedcfe;">
                        <h5 class="card-title">What is Queries?</h5>
                        <p class="card-text">Queries is description area where students will be part of interaction
                            directly with other students or faculty for their difficulties and doubts.</p>
                        <a href="/cleardoubts/queries.php?loginsuccess=true" class="btn btn-outline-dark" style="background-color: #cac7ff;" type="button">Explore...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center" style="background-color:#e5e5ff">
                        <ion-icon name="document" style="font-size: 20px;"></ion-icon>
                        PROJECT
                    </div>
                    <div class="card-body" style="background-color:#dedcfe;">
                        <h5 class="card-title">What is Project?</h5>
                        <p class="card-text">In this field, Students will share thier Projects to showcase their skills
                            and also other collegeues can explore it for review to it or learning from them. </p>
                        <a href="/cleardoubts/project.php?loginsuccess=true"  class="btn btn-outline-dark" style="background-color: #cac7ff;" type="button">Explore...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent">
            <h3>Recent activities</h3>
        </div>
        <div class="sliding">
            <section class="caraousel">
                <div class="caraousel_slider">
                    <ul class="caraousel_list">

                        <li class="carousel__item">
                            <span>
                                <div class="card" style="width: 18rem; background-color: #cac7ff;min-height: 208px;">
                                    <div class="card-body">
                                        <h5 class="card-title">PROJECTS</h5>
                                        <div class="row">
                                          <h6 class="card-subtitle mb-2 text-muted col">IT</h6>
                                        <h6 class="card-subtitle mb-2 text-muted col">Sem-5</h6>
                                        </div>
                                        <p class="card-text" style="font-size: smaller;">We are came up with idea of mental health applicaton. Our team had taken part in a hackathon at DDU, Nadiad.</p>
                                        <a href="#" class="card-link">Read more...</a>
                                    </div>
                                  </div>
                            </span>


                        </li>
                        <li class="carousel__item">
                            <span><div class="card" style="width: 18rem; background-color: #cac7ff;min-height: 208px;">
                                <div class="card-body">
                                  <h5 class="card-title">NOTICE</h5>
                                  <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted col">CE</h6>
                                  <h6 class="card-subtitle mb-2 text-muted col">Sem-6</h6>
                                  </div>
                                  <p class="card-text" style="font-size: smaller;">All have request to pay thier pending fees before due date. After due date there will be penalty. so, consider it.</p>
                                  <a href="#" class="card-link">Read more...</a>
                                </div>
                              </div></span>
                        </li>
                        <li class="carousel__item">
                            <span><div class="card" style="width: 18rem; background-color: #cac7ff; min-height: 208px;">
                                <div class="card-body">
                                  <h5 class="card-title">QUERIES</h5>
                                  <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted col">Civil</h6>
                                  <h6 class="card-subtitle mb-2 text-muted col">Sem-7</h6>
                                  </div>
                                  <p class="card-text" style="font-size: smaller;">I am from civil Enginnering and I have question for internship. If any one can help me than please help me.</p>
                                  <a href="#" class="card-link">Read more...</a>
                                </div>
                              </div></span>
                        </li>
                        <li class="carousel__item">
                            <span><div class="card" style="width: 18rem; background-color: #cac7ff; min-height: 208px;">
                                <div class="card-body">
                                  <h5 class="card-title">NOTICE</h5>
                                  <div class="row">
                                    <h6 class="card-subtitle mb-2 text-muted col">Civil</h6>
                                  <h6 class="card-subtitle mb-2 text-muted col">Sem-7</h6>
                                  </div>
                                  <p class="card-text" style="font-size: smaller;">Those who have not applied for internship till now, We request them to please apply in any industry. It"s mandatory for all. </p>
                                  <a href="#" class="card-link">Read more...</a>
                                </div>
                              </div></span>
                        </li>
                        <!-- <li class="carousel__item">
                            <span>6</span>
                        </li> -->

                    </ul>

                </div>
            </section>
        </div>
    </div>
    <script>
    "use strict";

        function carousel() {
        let carouselSlider = document.querySelector(".caraousel_slider");
        let list = document.querySelector(".caraousel_list");
        let item = document.querySelectorAll(".carousel__item");
        let list2;

        const speed = 1;

        const width = list.offsetWidth;
        let x = 0;
        let x2 = width;

        function clone() {
            list2 = list.cloneNode(true);
            carouselSlider.appendChild(list2);
            list2.style.left = `${width}px`;
        }

        function moveFirst() {
            x -= speed;

            if (width >= Math.abs(x)) {
            list.style.left = `${x}px`;
            } else {
            x = width;
            }
        }

        function moveSecond() {
            x2 -= speed;

            if (list2.offsetWidth >= Math.abs(x2)) {
            list2.style.left = `${x2}px`;
            } else {
            x2 = width;
            }
        }

        function hover() {
            clearInterval(a);
            clearInterval(b);
        }

        function unhover() {
            a = setInterval(moveFirst, 10);
            b = setInterval(moveSecond, 10);
        }

        clone();

        let a = setInterval(moveFirst, 10);
        let b = setInterval(moveSecond, 10);

        carouselSlider.addEventListener("mouseenter", hover);
        carouselSlider.addEventListener("mouseleave", unhover);
        }

        carousel();
    </script>
</body>

</html>';
?>