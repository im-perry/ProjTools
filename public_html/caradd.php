<!DOCTYPE html>
<?php
require_once("config.php");
    if((isset($_POST['brand'])&& $_POST['brand'] !='') && (isset($_POST['model'])&& $_POST['model'] !='') && (isset($_POST['prodyear'])&& $_POST['prodyear'] !='') && (isset($_POST['motor'])&& $_POST['motor'] !='')){
    $brand = $link->real_escape_string($_POST['brand']);
    $model = $link->real_escape_string($_POST['model']);
    $productionyear = $link->real_escape_string($_POST['prodyear']);
    $motor = $link->real_escape_string($_POST['motor']);
    $usermail = $_SESSION['email'];
    $sql = "INSERT INTO cars(brand, model, productionyear, motor, usermail) VALUES ('".$brand."', '".$model."', '".$productionyear."', '".$motor."', '".$usermail."')";
    $result = $link->query($sql);
    if(!$result){
    die('There was an error running the query [' . $link->error . ']');
    }
    else {
        ?>
        <script>
            alert('Car Added Successfully');
            window.location = 'userdata.php';
        </script>
        <?php
        }  
    }
?>