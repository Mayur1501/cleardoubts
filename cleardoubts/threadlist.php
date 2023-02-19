<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cleardoubts</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/1004/1004742.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php require "partials/_header.php" ?>
    <?php require "partials/_dbconnect.php" ?>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id`= '$id' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>

    <?php
    $showAlert = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $th_title = $_POST['title'];
        $th_title = str_replace(">","&gt;",$th_title);
        $th_title = str_replace("<","&lt;",$th_title);
        
        $th_desc = $_POST['desc'];
        $th_desc = str_replace(">","&gt;",$th_desc);
        $th_desc = str_replace("<","&lt;",$th_desc);

        $user_id = $_SESSION['userid'];

        // * Insert the question in database
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$user_id', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;


    }
    ?>


    <!-- Categories start here -->
    <div class="container my-4 ">
        <div class="p-4 bg-dark text-light rounded-4">
            <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold">Welcome to
                    <?php echo $catname; ?> forum
                </h1>

                <p class="lead">
                    <?php echo $catdesc; ?>
                </p>
                <hr class="my-4">
                <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in
                    the forums is not allowed. Do not post copyright-infringing material. Do not post “offensive” posts,
                    links or images. Do not cross post questions. Remain respectful of other members at all times.</p>
            </div>
        </div>
    </div>

    <!-- ************************** Questions start here ************************** -->
    <!-- ***************************************************************************************************
         ***************************************************************************************************
         ***************************************************************************************************

         $_SERVER[\'PHP_SELF\'] - It is used to go same page (excluding ?something [ like, forum/threadlist.php ])
         $_SERVER[\'REQUEST_URI\'] - It is used to go same page (including ?something [ like, forum/threadlist.php?catid=1 ])

         ***************************************************************************************************
         ***************************************************************************************************
         ***************************************************************************************************
    -->

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {

        echo '
    <div class="container my-2">
        <h1 class="my-4">Ask your question</h1>


        <form class="p-3 my-2 border rounded-3" action="' . $_SERVER["REQUEST_URI"] . '" method="post">

            <div class="my-2">
                <label for="title" class="form-label">Problem Title</label>
                <input type="text" class="form-control border" name="title" id="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your title as crisp and short as possible.</div>
            </div>

            <div class="mt-3 mb-2">
                <label for="desc" class="form-label">Leave your concern here</label>
                <textarea class="form-control" style="height:100px;" placeholder="Leave your concern here" name="desc"
                    id="desc"></textarea>
            </div>';

        if ($showAlert) {
            echo '<p class="text-success" id="th_success">Your thread has been added successfully.</p>
            <script>setTimeout(()=>{
                document.getElementById("th_success").remove();
            },2000)</script>';
        }
        echo '
            <button type="submit" class="btn btn-dark mt-3">Submit</button>
        </form>
        </div>';
    } else {
        echo '<div class="container card my-2">
        <div class="card-body">
                    <p class="fw-bold">Log in to post problem.</p>
                </div>
            </div>';
    }
    ?>
    <div class="container my-2">
        <h1 class="my-4">Browse Queries</h1>
        <?php
        // $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_cat_id`= '$id' ";
        $result = mysqli_query($conn, $sql);
        $noResult = true;

        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $tid = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_description'];
            $thread_user_id = $row['thread_user_id'];

            $sql2 = "SELECT `user_name` FROM `cdusers` WHERE `user_id`='$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);


            echo '<hr><div class="d-flex">
            <div class="flex-shrink-0">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDWpLVGVK3Q-Lwd0vDrHR4nwk2xvs8HSHMfA&usqp=CAU"
                              height="40px" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                      <p class="fw-bold text-dark my-1">' . $row2['user_name'] . '</p>
                      <p class="my-0"><a href="thread.php?threadid=' . $tid . '&reply=false" class="text-decoration-none fw-semibold text-dark" >' . $title . '</a> </p>
                          <p class="ps-2 mb-0">' . $desc . '</p>
                      </div>
                      </div>';
        }

        if ($noResult) {
            echo '<div class="card">
            <div class="card-body">
            <p class="fw-bold">No result found</p>
            <p>Be the first person to ask a question.</p>
            </div>
            </div>';
        }
        ?>


    </div>



    <?php require "partials/_footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>


</body>

</html>