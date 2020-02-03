<?php

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $phone = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $mailTo = "llorenstaxi@gmail.com";
    $headers = "From: ".$mail;
    $txt = "Vous avez reçu un mail de ".$prenom. $nom. .$phone".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>