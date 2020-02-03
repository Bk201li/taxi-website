<?php

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $phone = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $mailTo = "llorenstaxi@gmail.com";
    $headers = "From: ".$mail;
    $txt = "You have received an e-mail from ".$prenom. $nom. .$phone.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>