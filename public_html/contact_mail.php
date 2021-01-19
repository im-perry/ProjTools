    <?php
    $toEmail = "perisoara.mihai@gmail.com";
    $mailHeaders = "From: " . $_POST["InputFirst"] . " ".$_POST["InputLast"]."<" . $_POST["InputEmail1"] . ">\r\n";
    mail($toEmail, $_POST["FormSubject"], $_POST["FormControlTextarea"], $mailHeaders);
    ?>
