<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME ICONS LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Kanit:wght@100;800;900&family=Martel+Sans:wght@900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@200&display=swap"
        rel="stylesheet">

    <!-- TITLE ICONS -->
    <link rel="shortcut icon" type="image" href="images/Ashray.png">

    <!-- STYLE -->

    <style>
    /* BODY */
    body {
        margin: 0;
        font-family: 'Montserrat';
        /* overflow: hidden; */
    }

    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    .ch_home {
        width: 90%;
        margin: auto;
        margin-top: 3%;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0% 3%;
    }

    .logo {
        width: auto;
        float: left;
    }

    .logo img {
        width: 100px;
    }

    .navbar .right {
        float: left;
        text-align: right;
        display: flex;
        align-items: center;
    }

    .navbar .right .search {
        float: left;
        text-align: right;
        display: flex;
        align-items: center;
        background: #f4f4f9;
        padding: 10px 15px;
        padding-bottom: 14px;
        border-radius: 5px;
    }

    .navbar .right .search i {
        padding: 0px 10px;
    }

    .navbar .right .search input {
        border: 0px;
        background: transparent;
        outline: 0;
        padding-top: 5px;
    }

    .navbar .right .explore_ngo {
        display: inline-block;
        margin-left: 35px;
        background: #1977f3;
        padding: 11px 10px;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        padding-bottom: 11px;
    }

    .navbar .right img {
        width: 40px;
        margin-left: 15px;
        border-radius: 5px;
        height: 40px;
    }

    .ch_main {
        display: inline-block;
        width: 100%;
    }

    .ch_main .left {
        width: 30%;
        float: left;
        position: sticky;
        top: 50px;
    }

    .ch_main .left .profile_card {
        width: 70%;
        display: flex;
        align-items: center;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        padding: 15px 20px;
        margin-left: 8%;
    }

    .ch_main .left .profile_card img {
        width: 45px;
        height: 45px;
    }

    .ch_main .left .profile_card span {
        margin-left: 20px
    }

    .ch_main .left .sidebar a {
        display: inline-block;
        width: 100%;
        padding: 10px 0px;
        margin-bottom: 6%;
        text-decoration: none;
        color: black;
    }

    .ch_main .left .sidebar {
        background: white;
        margin-top: 10%;
        width: 70%;
        margin-left: 8%;
        margin-top: 15%;
        padding-top: 20px;
        padding-left: 40px;
        border-radius: 5px;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
    }

    .main {
        background: #f9fafb;
        display: inline-block;
        padding-top: 4%;
        width: 100%;
    }

    .main .center {
        float: left;
        width: 40%;
    }

    .main .center .post_it {
        background: white;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        padding: 5px 15px;
        display: flex;
        align-items: center;
        border-radius: 5px;
        padding-left: 4%;
        padding-right: 30px;
        padding-top: 3%;
        padding-bottom: 3%;
    }

    .main .center .posts {
        margin-top: 8%;
        border-radius: 5px;
        padding: 0px 15px;
        padding-bottom: 6%;
        background-color: white;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
    }

    .main .center .post_it img {
        width: 50px;
        height: 50px;
    }

    .main .center .post_it input {
        outline: 0;
        border: 0px;
        margin-left: 20px;
        width: 290px;
    }

    .main .center .post_it a {
        display: inline-block;
        margin-left: 35px;
        background: #1977f3;
        padding: 11px 10px;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        padding-bottom: 11px;
    }

    .ch_main .center .posts .profile_card {
        /* width: 70%; */
        display: flex;
        align-items: center;
        /* box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px; */
        padding: 15px 20px;
        /* margin-left: 8%; */
    }

    .ch_main .center .posts h3 {
        font-size: 12px;
        font-weight: 500;
        margin-top: 0px;
        margin-left: 4%;
    }

    .ch_main .center .posts img {
        margin-left: 4%;
        margin-bottom: 10%;
        width: 330px;
        height: 190px;
    }

    .ch_main .center .posts .profile_card img {
        width: 45px;
        height: 45px;
        margin: 0 !important;
    }

    .ch_main .center .posts .profile_card span {
        margin-left: 20px
    }

    .ch_main .center .posts .links {
        margin-left: 4%;
    }

    .ch_main .center .posts .links i {
        margin-right: 20px;
        font-size: 18px;
    }

    .ch_main .left .sidebar .sideitem {
        display: flex;
        align-items: center;
    }

    .ch_main .left .sidebar .sideitem i {
        margin-top: -6%;
        margin-right: 10%;
    }

    /*  */
    .ch_main .right .contacts .profile_card {
        width: 95%;
        display: flex;
        align-items: center;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        padding: 15px 20px;
        margin-left: 8%;
        margin-bottom: 3%;
    }

    .ch_main .right .contacts .profile_card img {
        width: 45px;
        height: 45px;
    }

    .ch_main .right .contacts .profile_card span {
        margin-left: 20px;
    }

    .ch_main .right {
        float: left;
        position: sticky;
        top: 50px;
    }

    .ch_main .right h3 {
        margin-left: 10%;
        color: #adb2bf;
        font-size: 15px;
        font-weight: 500;
        margin-top: 0px;
    }

    .form-popup {
        /* display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 18; */
        z-index: 18;
        background: #0000009e;
        width: 100%;
        height: 100%;
        position: fixed;
        display: none;
        justify-content: center;
        align-items: center;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }


    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }

    .toggle-scroll {
        overflow: hidden;
    }
 </style>
    <link rel="stylesheet" href="style.css" />
</head>

<body id="toggle-scroll" class="toggle-scroll">

    <!-- hOME -->
    <div class="home">
        <button class="open-button" onclick="openForm()">Open Form</button>


        <div class="form-popup toggle-scroll" id="myForm">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="formbold-input-wrapp formbold-mb-3">
                    <div>
                        <input type="textarea" name="description" id="firstname" placeholder="First name"
                            class="formbold-form-input" />

                        <input type="file" name="image" id="file-input" multiple><br>
                        
                        <label for="file-input">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            &nbsp; Choose Files To Upload
                        </label>
                        <input type="submit" name="submit" value="Upload" id="submit">
                        <div id="num-of-files">No Files Choosen</div>
                        <ul id="files-list"></ul>
        </div>
      </form>
</div>
</div>
            
            <?php  
                    // Include the database configuration file  
                    require_once 'dbConfig.php';
                                $query = "SELECT * FROM images ORDER BY id DESC";  
                                $result = mysqli_query($db,$query);                               
                    ?>

        </div>

        <div class="navbar">
            <div class="logo">
                <a href="home_ngo.html"><img src="images/Screenshot 2023-02-11 072716.jpg" alt=""></a>
            </div>
            <div class="right">
                <div class="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search">
                </div>
                <a href="#" class="explore_ngo">Explore NGO</a>
                <a href="profile_ngo.html"><img src="images/IMG-0283.jpg" alt=""></a>
            </div>
        </div>
        <hr>
        <div class="main">

            <div class="ch_main">
                <div class="left">
                    <div class="profile_card">
                        <img src="images/IMG-0283.jpg" alt="">
                        <span>Divyesh Rathod</span>
                    </div>
                    <div class="sidebar">
                        <div class="sideitem">
                            <i class="fa fa-thin fa-house-chimney"></i><a href="home_ngo.html">Home</a>
                        </div>
                        <div class="sideitem">
                            <i class="fa fa-regular fa-user"></i><a href="profile_ngo.html">Profile</a>
                        </div>
                        <div class="sideitem">
                            <i class="fa fa-light fa-hand-holding-medical"></i><a href="donator_ngo.html">Donators</a>
                        </div>
                        <div class="sideitem">
                            <i class="fa fa-light fa-calendar"></i><a href="add_event_ngo.html">Add Event</a>
                        </div>
                        <div class="sideitem">
                            <i class="fa fa-sharp fa-solid fa-radio"></i><a href="news_ngo.html">News Feed</a>
                        </div>
                        <div class="sideitem">
                            <i class="fa fa-thin fa-signs-post"></i><a href="my_post_ngo.html">My Events</a>
                        </div>
                    </div>
                </div>
                <div class="center">

                    <div class="post_it">

                        <?php  
    // Include the database configuration file  
                require_once 'dbConfig.php';
                $query = "SELECT * FROM images ORDER BY id DESC";  
                $result = mysqli_query($db,$query); 
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                     </div>
                        <div class="posts">
                        <div class="profile_card">
                            <img src="images/post2_id.png" alt="">
                            <span>OXFam NGOs</span>
                        </div>
                        <h3>    
                        <?php
                           echo '($row['description']);'
                           ?>
                        </h3>
                         
                        <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                             
                     ';  
                }  
                ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    if (document.querySelector("#toggle-scroll").classList.contains('toggle-scroll')) {

        document.querySelector("#toggle-scroll").classList.toggle('toggle-scroll');
    }

    function openForm() {
        document.getElementById("myForm").style.display = "flex";
        if (!document.querySelector("#toggle-scroll").classList.contains('toggle-scroll')) {

            document.querySelector("#toggle-scroll").classList.toggle('toggle-scroll');
        }

    }

    // function closeForm() {
    //     document.getElementById("myForm").style.display = "none";
    // }
    </script>
</body>

</html>