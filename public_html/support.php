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
            <form>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="InputFirst">First Name</label>
                        <input type="name" class="form-control" id="InputFirst" aria-describedby="emailHelp" placeholder="Enter Your First Name">    
                    </div>
                    <div class="col-md-6">
                        <label for="InputLast">Last Name</label>
                        <input type="name" class="form-control" id="InputLast" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="FormControlTextarea">Message Area</label>
                    <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
                </div>
            </form>
        </div>
    </body>
</html>
