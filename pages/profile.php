<?php
session_start();

if (isset($_GET['user'])) {
    $_SESSION['user'] = $_GET['user'];
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- PAGE TITLE -->
    <title>Canvas - Profile</title>

    <!-- SITE META DATA -->
    <meta name="keywords" content="CANVAS, CODING CHALLENGE, GAME, WEB DEVELOPMENT, HTML, CSS, JAVASCRIPT">
    <meta name="description" content="A Collection of re-imagined games turned Challenges to practice Web Development.">
    <meta name="author" content="Ben Madelin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SITE RESOURCES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="..\img\favicon.png">

    <!-- PAGE STYLING -->
    <link rel="stylesheet" type="text/css" href="..\style\style.css">
    <link rel="stylesheet" type="text/css" href="..\style\account.css">
</head>

<body>
    <!-- PAGE CONTAINER -->
    <div class="wrapper">
        <header>
            <div class="flex-container">
                <a href="..\pages\index.php" class="nav-logo"><h1>CANVAS CODING CHALLENGES</h1></a>
                <a href="..\pages\account.php" class="nav-account"><button><b>Account</b></button></a>
            </div>
        </header>

        <?php require('../service/account.php'); ?>

        <!-- CONTENT -->
        <div class="account-content">

            <!-- ACCOUNT -->
            <div class="profile-container">

                <!-- TITLE -->
                <h1>Account <?php echo '[' . $_SESSION['user'] . ']'?></h1>
                <hr>

                <!-- SIGNUP MESSAGE -->
                <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 'login') {
                        echo '<p style="float:right;color:green;">Login In Successful!</p>';
                    } else if ($_GET['success'] == 'updated') {
                        echo '<p style="float:right;color:green;">Account Data Updated!</p>';
                    } else if ($_GET['success'] == 'register') {
                        echo '<p style="float:right;color:green;">Account Created!</p>';
                    } else if ($_GET['success'] == 'restore') {
                        echo '<p style="float:right;color:green;">Account Data Restored!</p>';
                    }
                }
                ?>

                <!-- USER PREFERENCES -->



            </div>

        </div>

        <footer>
            <a href="https://github.com/madelinben/canvas-js"><i class="credit">~ Ben Madelin ~</i></a>
        </footer>
    </div>
</body>

</html>