<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar">
        <nav>
            <h2 class="logo">Parking<span>Kothay?</span></h2>     
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="find-parking.html">Find Parking</a></li>
                <li><a href="place_parking.html">List Your Parking</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><form method="POST"><button name="LogOut">Log Out</button></form></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="welcome">
            <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
        </div>
    </div>

    <?php
        if(isset($_POST['LogOut'])){
            session_destroy();
            header("location: login.php");
        }
    ?>
</body>
</html>