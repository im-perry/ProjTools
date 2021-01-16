<!DOCTYPE html>
<?php
session_start();

?>

<html>
    <head>
        <title>Ford</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="css/myCss.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type = "text/javascript" src="js/bootstrap.min.js"></script>
        <script type = "text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div>
            <?php
                if(isset($_SESSION["loggedin"]) and $_SESSION["loggedin"] == true){
                    include 'loggednav.php';
                }elseif(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    include 'nav.php';
                }
            ?>
        </div>
        <div>
            <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "home"){
                    include 'home.php';
                }else if($_GET['page'] == "support"){
                    include 'support.php';
                }else if($_GET['page'] == "dealers"){
                    include 'dealers.php';
                }else if($_GET['page'] == "login"){
                    header("Location: login.php");
                }else if($_GET['page'] == "register"){
                    header("Location: register.php");
                }
            } else {
                include 'home.php';
            }
            ?>
        </div>
        <div>
            <?php include 'footer.php';?>
        </div>
    </body>
</html>
