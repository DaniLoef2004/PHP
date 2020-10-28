<?php
$logedIn = false;
if ($_GET != null) {
    $email = $_GET["email"];
    $password = $_GET["password"];
    login($email, $password);
}
function login($email, $password) {
    if ($email == "piet@worldonline.nl" && $password == "doetje123" || $email == "klaas@carpets.nl" && $password == "snoepje777" || $email == "truushendriks@wegweg.nl" && $password == "arkiearkie201") {
        $ingelogd = true;
        if ($ingelogd) {
            echo 'Hoi';
        }
    } else {
        $ingelogd = false;
        if (!$ingelogd) {
            echo 'Dat dacht ik dus even niet hé';
        }
    }
}
?>