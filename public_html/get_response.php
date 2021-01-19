<?php 
    require_once("config.php");
    if((isset($_POST['InputFirst'])&& $_POST['InputFirst'] !='') && (isset($_POST['InputLast'])&& $_POST['InputLast'] !='') && (isset($_POST['InputEmail1'])&& $_POST['InputEmail1'] !=''))
    {
    require_once("contact_mail.php");
    $firstname = $link->real_escape_string($_POST['InputFirst']);
    $lastname = $link->real_escape_string($_POST['InputLast']);
    $email = $link->real_escape_string($_POST['InputEmail1']);
    $subject = $link->real_escape_string($_POST['FormSubject']);
    $message = $link->real_escape_string($_POST['FormControlTextarea']);
    $sql="INSERT INTO form (firstname, lastname, email, subject, message) VALUES ('".$firstname."','".$lastname."', '".$email."', '".$subject."','".$message."')";
    if(!$result = $link->query($sql)){
    die('There was an error running the query [' . $link->error . ']');
    }
    else
    {
    echo "Thank you! We will contact you soon";
    }
    }
    else
    {
    echo "Please fill in your First Name, Last Name and Email";
    }
?>
