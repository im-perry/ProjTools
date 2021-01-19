<!DOCTYPE html>
<?php
require_once "config.php";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

if(isset($_POST['submit'])){
        $firstname = $_POST['name1'];
        $lastname = $_POST['name2'];
        $email = $_POST['name3'];
        $param = $_GET['id'];
        $sql = "UPDATE `users` SET `firstname`= ?,`lastname`= ?,`email`= ? WHERE `id`= $param";
        if(($stmt = mysqli_prepare($link, $sql))){
            mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);
        if(mysqli_stmt_execute($stmt)){
                header("location: userdata.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
        ?>
        <script>
            alert('Update Successfull');
            window.location = 'userdata.php';
        </script>
        <?php
    }

$query = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = '".$_SESSION['id']."' ")or die(mysqli_error());
$arr = mysqli_fetch_array($query);
$num = $query->num_rows;

?>

<html>
    <head>
        <title> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script>
        function editName(number) {
            document.getElementById('name' + number).readOnly=false;
        };
    </script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
                        include 'userdataside.php';
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12" id="user">
                        <?php if($num > 0){ ?>
                        <h2>Your Info</h2>
                        <p>Edit your info if you want.</p>
                        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group col-md-7">
                                <label for="name">First Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name1" 
                                    value="<?php echo $arr['firstname']; ?>" readonly>
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil" onclick='editName(1)'></span>
                                    </div>
                                </div>   
                            </div>
                            <div class="form-group col-md-7">
                                <label for="name">Last Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name2" 
                                    value=" <?php echo $arr['lastname']; ?>" readonly>
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil" onclick='editName(2)'></span>
                                    </div>
                                </div>   
                            </div>
                            <div class="form-group col-md-7">
                                <label for="name">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name3" 
                                    value="<?php echo $arr['email']; ?>" readonly>
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil" onclick='editName(3)'></span>
                                    </div>
                                </div>   
                            </div>
                            <div class="form-group col-md-7">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                        <?php }?>
                    </div>
                    <div class="col-md-12" id="resetpass">
                        <?php include 'reset.php';?>
                    </div>
                    <div class="col-md-12" id="car">
                        <?php include 'car.php';?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
