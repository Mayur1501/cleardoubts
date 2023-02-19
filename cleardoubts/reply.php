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

    <?php require "partials/_header.php"?>
    <?php require "partials/_dbconnect.php"?>

    <?php
$id = $_GET['replyid'];
$sql = "SELECT * FROM `threads` WHERE `thread_id`= '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$tid = $row['thread_id'];
$title = $row['thread_title'];
$desc = $row['thread_description'];
$thread_user_id = $row['thread_user_id'];

$sql2 = "SELECT * FROM `cdusers` WHERE `user_id`='$thread_user_id'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
?>


    <!-- Categories start here -->
    <div class="container my-4 ">
        <div class="p-4 bg-dark text-light rounded-4">
            <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold">
                    <?php echo $title; ?>
                </h1>
                <p class="lead">
                    <?php echo $desc; ?>
                </p>
                <hr class="my-4">
                <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in
                    the forums is not allowed. Do not post copyright-infringing material. Do not post “offensive” posts,
                    links or images. Do not cross post questions. Remain respectful of other members at all times.</p>
                <p>Posted by:<em>
                        <?php echo $row2['user_name'] ?>
</em></p>
            </div>
        </div>
    </div>

    <!-- Add comments in database -->
    <?php
$showAlert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // $comment_by = $_POST['title'];
    $comment_content = $_POST['comment'];
    $comment_content = str_replace(">", "&gt;", $comment_content);
    $comment_content = str_replace("<", "&lt;", $comment_content);
    $comment_by = $_SESSION['username'];

    // * Insert the question in database
    $sql = "INSERT INTO `comments` (`comment_by`, `comment_content`, `thread_id`, `comment_time`) VALUES ('$comment_by', '$comment_content', '$tid', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;

}

?>

    <!-- Add your comments here -->
    <?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    echo '
    <div class="container my-2">
        <h1 class="my-4">Post a comment</h1>

        <form class="p-3 my-2 border rounded-3" action="' . $_SERVER["REQUEST_URI"] . '" method="post">

            <div class="mt-2 mb-2">
                <label for="comment" class="form-label">Type your comment</label>
                <textarea class="form-control p-2" style="height:100px;" placeholder="Comment" name="comment"
                    id="comment"></textarea>
            </div>';
    if ($showAlert) {
        echo '<p class="text-success" id="show_success">Your comment has been added successfully.</p>
            <script>setTimeout(()=>{
                document.getElementById("show_success").remove();
            },2000)</script>';
    }
    echo '
            <button type="submit" class="btn btn-dark mt-2">Post</button>
        </form>
    </div>';
} else {
    echo '<div class="container card my-2">
                <div class="card-body">
                    <p class="fw-bold">Log in to post comment.</p>
                </div>
            </div>';
}
?>

    <!-- ************************** Questions start here ************************** -->
    <div class="container">
        <h1 class="my-4">Discussions</h1>
        <hr>

        <?php
// $id = $_GET['threadid'];
$sql = "SELECT * FROM `comments` WHERE `thread_id`= '$id' ";
$result = mysqli_query($conn, $sql);
$noResult = true;

while ($row = mysqli_fetch_assoc($result)) {
    $noResult = false;
    $cid = $row['comment_id'];
    $content = $row['comment_content'];
    $person = $row['comment_by'];
    $time = $row['comment_time'];

    echo '<div class="d-flex">
                      <div class="flex-shrink-0">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDWpLVGVK3Q-Lwd0vDrHR4nwk2xvs8HSHMfA&usqp=CAU"
                              height="40px" alt="...">
                      </div>
                      <div class="flex-grow-1 ms-3">
                          <p class="fw-bold my-0"><a href="thread.php?threadid=' . $id . '" class="text-decoration-none text-dark" >' . $person . '</a> </p>
                          <p class="my-0 ps-1">' . $content . '</p>
                          <p>' . $time . '</p>
                      </div>
                  </div>';
}
if ($noResult) {
    echo '<div class="card my-2">
                    <div class="card-body">
                        <p class="fw-bold">No result found</p>
                        <p>Be the first person to ask a question.</p>
                    </div>
                </div>';
}
?>


    </div>



    <?php require "partials/_footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>