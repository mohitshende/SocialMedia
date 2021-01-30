<?php
include "../backend/post.php";

if(!isset($_SESSION['email'])){
    echo "<script>window.location.href='Login.php'</script>";

}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Styles/Home.css">

    <!-- Custom Inline styles -->
    <style>
    .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        /* left: 0; */
        right: 0;
        width: 250px;
        z-index: 1000;
        display: block;
        /* padding: 20px; */
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
        background-color: #f5f5f5;
        border-right: 1px solid #eee;
    }

    @media (min-width: 768px) {
        .main {
            padding-right: 290px;
            /* 250 + 40 */
            padding-left: 40px;
        }
    }

    .vertical-menu {
        width: 100%;
        /* Set a width if you like */
    }

    .vertical-menu .prsec {
        background-color: #eee;
        /* Grey background color */
        color: black;
        /* Black text color */
        display: block;
        /* Make the links appear below each other */
        padding: 12px;
        /* Add some padding */
        text-decoration: none;
        /* Remove underline from links */
    }

    .vertical-menu .prsec:hover {
        background-color: #ccc;
        /* Dark grey background on mouse-over */
    }

    .vertical-menu .prsec.active {
        background-color: #4caf50;
        /* Add a green color to the "active/current" link */
        color: white;
    }

    .prsec {
        border-bottom: 4px solid #4CAF50;
    }
    </style>
    <title>Social</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <h5 class="mx-5 my-2" style="color:white;"><?php echo "Hii, ".$_SESSION['name'];?></h5>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Profile.php">Your Profile</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../backend/logout.php">Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 main">
                <form class="my-4 container shadow" method="post" enctype="multipart/form-data">
                    <div class="form-floating my-4">
                        <input class="form-control my-2" type="text" name="heading"
                            placeholder="Write the Post Heading">
                        <textarea class="form-control" name="message" placeholder="Write what you like ..."
                            id="floatingTextarea2" style="height: 100px"></textarea>

                        <input class="my-2" type="file" name="uploadfile" value="" />
                    </div>
                    <button class="btn btn-outline-success my-2" name="post" type="submit">Post</button>
                </form>
                <div class="container">
                    <?php
    include "../backend/userpost.php";
    ?>
                </div>
            </div>
            <div class="sidebar bg-secondary">
                <div class="vertical-menu">

                    <div class="prsec">
                        <div class="py-2 d-flex flex-row align-items-center justify-content-between">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar"
                                style="width:70px;border-radius: 50%;">
                            <h3>Username</h2>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="" class="btn btn-secondary mr-2"><i class="bi bi-person-plus-fill"></i></a>
                            <a href="" class="btn btn-secondary"><i class="bi bi-chat-left-fill"></i></a>
                        </div>
                    </div>

                    <div class="prsec">
                        <div class="py-2 d-flex flex-row align-items-center justify-content-between">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar"
                                style="width:70px;border-radius: 50%;">
                            <h3>Username</h2>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="" class="btn btn-secondary mr-2"><i class="bi bi-person-plus-fill"></i></a>
                            <a href="" class="btn btn-secondary"><i class="bi bi-chat-left-fill"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</body>
<script src="JS/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>