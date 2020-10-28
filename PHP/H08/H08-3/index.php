<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Wheely</title>
     <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">

    <img class="header" src="img/wheely_header.jpg">

    <div class="formcontainer">

        <form action="index.php" method="GET">

            <label for="merk">Merk</label>
            <br>
            <select name="merk" id="merk">
                <option value="all">Alle merken</option>
                <option value="Audi">Audi</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Opel">Opel</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Mercedes">Mercedes Benz</option>
            </select>

            <br>

            <label for="maxprice">Max prijs</label>
            <br>
            <input type="text" name="maxprice" id="maxprice">

            <br>

            <label for="minprice">Min prijs</label>
            <br>
            <input type="text" name="minprice" id="minprice">

            <br>

            <input type="submit" class="submit">
        </form>
    </div>
</div>
</body>
</html>

<?php

include "lib/Auto.php";
include "lib/Autooverzicht.php";

$minPrice = "";
$maxPrice = "";
$merkfilter = "";

$minPrice = isset($_GET['minprice']) && !empty($_GET['minprice']) ? $_GET['minprice'] : 0;
$maxPrice = isset($_GET['maxprice']) && !empty($_GET['maxprice']) ? $_GET['maxprice'] : 9999999999;
$merkfilter = isset($_GET['merk']) && !empty($_GET['merk']) ? $_GET['merk'] : "all";

$autoos = new Autooverzicht;

foreach($autoos->getGefilterdeLijst($minPrice, $maxPrice, $merkfilter) as $auto) {
    echo "<div class='carview'>
            <img src=" . $auto->getImage() . ">
            <div class='infoview'>
                <p class='info brandview'> Merk: " . $auto->getMerk() . "</p>
                <p class='info priceview'> Prijs: €" . $auto->getPrijs() . "</p>
            </div>
          </div>";
}



?>