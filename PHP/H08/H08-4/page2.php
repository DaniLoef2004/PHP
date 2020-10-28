<!doctype html>
<html lang="en">
<head>
    <style>
        header{
            background-image: url("img/Header.jpg");
            padding: 10px;
            color: white;
        }
    </style>
    <meta charset="UTF-8">

    <title>Bakkerij Wim Vlecht</title>

    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
    <h1>Bakkerij</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Overzicht Broodjes</a></li>
        <li><a href="page2.php">Broodjes toevoegen</a></li>
    </ul>
</nav>
<div class="container">
    <form action='page2.php' method='post'>
        <label for="meelveld"><b>Soort meel</b></label><br>
        <input type="text" name="meel" id="meelveld" required><br>
        <label for="vormveld"><b>Vorm broodje</b></label><br>
        <input type="text" name="vorm" id="vormveld" required><br>
        <label for="gewichtveld"><b>Gewicht (eenheid erbij)</b></label><br>
        <input type="text" name="gewicht" id="gewichtveld" required><br><br>
        <input id="knop" type="submit" name="add" value="Voeg brood toe">
    </form>
</div>
<?php
require ("Broodjes.php");
$input = new Broodjes();
if (isset($_POST['add'])) {
    $meel = $_POST['meel'];
    $vorm = $_POST['vorm'];
    $gewicht = $_POST['gewicht'];
    $input->addBroodjes($meel,$vorm,$gewicht);
}

?>
</body>
</html>