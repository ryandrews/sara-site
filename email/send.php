<?php
    $to = "saraasgh@gmail.com";
    #$to = "drsara@andrewssmiles.com";
    $subject = "Website Email Inquery";
    $message =
        "Name: " . $_POST["name"] . "\n" .
        "Phone: " . $_POST["phone"] . "\n" .
        "Email: " . $_POST["email"] . "\n" .
        "Message: " . $_POST["message"];
    $headers = 'From: website@andrewssmiles.com' . "\r\n";

    mail($to, $subject, $message, $headers);
?>

Email Sent