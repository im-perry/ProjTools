<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html>
    <head>
        <title>Ford Dealers</title>
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
        <div class="container">
            <div class="nav col-md-2"  style = "overflow-x: hidden; float: right;">
                <ul class="list-group">
                <li><a class="list-group-item" href="#craiova">Craiova</a></li>
                <li><a class="list-group-item" href="#tgjiu">Targu Jiu</a></li>
                <li><a class="list-group-item" href="#slatina">Slatina</a></li>
                <li><a class="list-group-item" href="#bucuresti">Bucuresti</a></li>
                </ul>
            </div>
            <div id="wrap" style=" padding-right: 20%;">
                <div id="craiova"">
                    <?php include 'dealers/craiova.php';?>
                </div>
                <div id="tgjiu" style="padding-top: 10%;">
                    <?php include 'dealers/tgjiu.php';?>
                </div>
                <div id="slatina">
                    <?php include 'dealers/slatina.php';?>
                </div>
                <div id="bucuresti">
                    <?php include 'dealers/bucuresti.php';?>
                </div>
                <i onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-arrow-up" aria-hidden="true"></i>
            </div>

        </div>
<script>
/*function hide() {
  document.getElementById().style.display = "none";
}
function display(panel) {
  document.getElementById(panel).style.display = "block";
}*/
</script>
    </body>
</html>
