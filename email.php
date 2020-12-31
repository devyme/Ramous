<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adresse = $_POST['adresse'];
$request = $_POST['request'];

$to = "f7k6iu0@aroli.ma, arolivraison@gmail.com";
$subject = "$name";
$body = "-----------------Don't reply to this message!----------------- \n\nNom : $name \n\n E-mail : $email \n\n Telephone : $phone \n\n Adresse : $adresse \n\n Demande : \n\n$request";

mail($to, $subject, $body);

header("Location: /");

?>

