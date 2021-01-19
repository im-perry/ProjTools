<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Nav</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class = "navbar bg-primary">
            <div class="container" style="padding-bottom: 10px;">
                <a href="/?page=home"><img src="https://fontmeme.com/permalink/201206/ccef735378e68e17ba5812191ac8f2ff.png" alt="ford-font" border="0" style="float: left; padding-top: 14px; margin-right: 10px;"></a>
                <ul class="nav navbar-nav text-info">
                    <li class="active"><a href="/?page=home">Home</a></li>
                    <li class="active"><a href="/?page=dealers">Dealers</a></li>
                    <li class="active"><a href="/?page=support">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav text-info" style="float: right;">
                    <a href="/?page=userdata"><h5 class="navbar-nav text-info" style="margin: auto; color: white; padding-top: 17px;">
                        Hi, <b><?php echo htmlspecialchars($_SESSION['email']); ?></b></h5></a>
                    <li class="active" style="margin-left: 20px;"><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>   
        </nav>
    </body>
</html>
