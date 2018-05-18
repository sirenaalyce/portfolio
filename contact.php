<?php

if($_POST["submit"]) {
    $recipient="sirenaalyce1@gmail.com";
    $subject="Sirena Alyce Web Design Inquiry";
    $sender=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
