<!DOCTYPE html>
<?php
require_once "config.php";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$query = mysqli_query($link, "SELECT * FROM `cars` WHERE `usermail` = '".$_SESSION['email']."' ")or die(mysqli_error());
$arr = mysqli_fetch_array($query);
$num = $query->num_rows;

?>
        
<html>
    <head>
        <title>your car</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <hr/>
        <h2>Your Car</h2>
        <?php if($num > 0){ ?>
        <p>Add Your Car.</p>
        <form name="carform" method="post" id="carform" action="">
            <div class="form-group col-md-7">
                <div class="input-group">
                    <label for="name">Brand</label>
                    <input type="text" class="form-control" name="brand" 
                    value="<?php echo $arr['brand']; ?>" readonly>
                </div>   
            </div>
            <div class="form-group col-md-7">
                <div class="input-group">
                    <label for="name">Model</label>
                    <input type="text" class="form-control" name="model" 
                    value=" <?php echo $arr['model']; ?>" readonly>
                </div>   
            </div>
            <div class="form-group col-md-7">
                <div class="input-group">
                    <label for="name">Year of Production</label>
                    <input type="text" class="form-control" name="prodyear" 
                    value="<?php echo $arr['productionyear']; ?>" readonly>
                </div>   
            </div>
            <div class="form-group col-md-7">
                <div class="input-group">
                    <label for="name">Motor</label>
                    <input type="text" class="form-control" name="motor" 
                    value="<?php echo $arr['motor']; ?>" readonly>
                    </div>   
            </div>
            <div class="form-group col-md-7">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <?php 
        }else{
            ?>
            <p>You don't have a car added. Please add one to view save your info.</p>
            <form name="carform" id="carform" action="" method="post">
            <div class="form-group col-md-7">    
                <label for="name">Brand</label>
                <input type="text" class="form-control" name="brand">   
            </div>
            <div class="form-group col-md-7">
                <label for="name">Model</label>
                <input type="text" class="form-control" name="model">  
            </div>
            <div class="form-group col-md-7">
                <label for="name">Year of Production</label>
                <input type="text" class="form-control" name="prodyear">  
            </div>
            <div class="form-group col-md-7">
                <label for="name">Motor</label>
                <input type="text" class="form-control" name="motor">  
            </div>
            <div class="form-group col-md-7">
                <input type="submit" class="btn btn-primary" value="Add">
                <img src="res/loading.gif" id="loading-img">
            </div>
            </form>
        <?php
        }
        ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#carform").on("submit",function(e){
e.preventDefault();
if($("#carform [name='brand']").val() === '')
{
$("#carform [name='brand']").css("border","1px solid red");
}
else if ($("#carform [name='model']").val() === '')
{
$("#carform [name='model']").css("border","1px solid red");
}
else if ($("#carform [name='prodyear']").val() === '')
{
$("#carform [name='prodyear']").css("border","1px solid red");
}
else if ($("#carform [name='motor']").val() === '')
{
$("#carform [name='motor']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "caradd.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#carform").find("input[type=text], input[type=text], input[type=number], input[type=text]").val("");
}
});
}
});
$("#carform input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
    </body>
</html>