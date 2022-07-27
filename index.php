<!DOCTYPE html>
<?php
include_once 'config/config.php';
?>
<html lang="de">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>DoFi Balls</title>
        <!--Style-->
        <link rel="stylesheet" type="text/css" href="/css/modern-normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/slider.css"/>
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet"/>
        <!--Icon-->
        <link rel="shortcut icon" href="img/DoFi_Balls_Logo_icon.png">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="logo">
                    <a href="/home">
                        <img src="img/DoFi_Balls_Logo.png" alt="DoFi Balls Logo" width="295" height="100" />
                    </a>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <?php
                    include_once 'controller/menucontroller.php'
                    ?>
                </ul>
            </div>
            <div id="content">
                <?php
                include_once 'controller/controller.php'
                ?>
            </div>
            <div id="footer">
                <p>Copyright &copy; 2017 TicSys, <?php echo date("d.m.Y H:i:s"); ?></p>
            </div>
        </div>
        <script type="text/javascript" src="js/slider.js"></script>
    </body>
</html>