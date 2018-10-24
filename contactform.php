<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "andiakatz@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have recieved an email from " .$name + .$lastName;
    

    mail();
}