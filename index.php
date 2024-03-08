<?php session_start();?>

<html>

<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="video.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="header">
        <h2>Welcome to my page!</h2>
    </div>
    <?php

if (isset($_SESSION['valid'])) {
    include "connection.php";
    $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>

    Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br />
    <br />
    <a href='view.php'>View Products</a>
    <a href='add.php'>Add Products</a>
    <br /><br />


    <?php
} else {
    echo "You must be logged in to view this page.<br/><br/>";
    echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
}
?>



    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Video Header</h1>
                    <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page section example for content below the video header -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div id="footer">
                        Created by <a href="http://blog.chapagain.com.np" title="Mukesh Chapagain">Mukesh Chapagain</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php
require 'includes/footer.php';
?>

</body>

</html>