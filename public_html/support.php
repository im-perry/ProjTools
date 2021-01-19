<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Support</title>
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
            <div class="row">
                <div class="col-md-8">
                    <form name="contact-form" action="" method="post" id="contact-form">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="InputFirst">First Name</label>
                                <input type="text" class="form-control" name="InputFirst" placeholder="Enter Your First Name">    
                            </div>
                            <div class="col-md-6">
                                <label for="InputLast">Last Name</label>
                                <input type="text" class="form-control" name="InputLast" placeholder="Enter Your Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" name="InputEmail1" placeholder="Enter Your Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="FormSubject">Subject</label>
                            <input type="text" class="form-control" name="FormSubject" placeholder="Provide Your Subject">
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea">Message Area</label>
                            <textarea class="form-control" name="FormControlTextarea" rows="3" cols="28" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit_form">Submit</button>
                        <input type="reset" class="btn btn-default" value="Clear">
                        <img src="res/loading.gif" id="loading-img">
                    </form>
                    <div class="response_msg"></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='InputFirst']").val() === '')
{
$("#contact-form [name='InputFirst']").css("border","1px solid red");
}
else if ($("#contact-form [name='InputLast']").val() === '')
{
$("#contact-form [name='InputLast']").css("border","1px solid red");
}
else if ($("#contact-form [name='InputEmail1']").val() === '')
{
$("#contact-form [name='InputEmail1']").css("border","1px solid red");
}
else if ($("#contact-form [name='FormSubject']").val() === '')
{
$("#contact-form [name='FormSubject']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=text], input[type=email], input[type=text]textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
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
