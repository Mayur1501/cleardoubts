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


    <!-- Search results -->
    <div class="container my-3">
        <h2 class="text-center">Search results for <em>"<?php echo $_GET['query'] ?>"
            </em> </h2>
        <div class="container border rounded-3 p-3">
            <?php
            $query = $_GET['query'];
            $sql = "SELECT * FROM `threads` WHERE MATCH (`thread_title`,`thread_description`) AGAINST ('$query')";
            $result = mysqli_query($conn, $sql);
            $noSearch = true;

            while ($row = mysqli_fetch_assoc($result)) {
                $noSearch = false;
                $title = $row['thread_title'];
                $desc = $row['thread_description'];
                $th_id = $row['thread_id'];
                $url = "thread.php?threadid=" . $th_id."&reply=false";

                echo '<div class="results">
                    <h3><a href="' . $url . '" class="text-decoration-none">' . $title . ' </a></h3>
                    <p>' . $desc . '</p>
                 </div>';

            }

            if($noSearch){
                echo'
                <div class="p-2 my-2">
                        <p class="fw-bold">No results found...</p>
                        <p>Suggestions:</p>
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                        </ul>
                </div>';
            }
            ?>
        </div>
    </div>


    <?php require "partials/_footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>