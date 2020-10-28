
<?php

include_once('lib/AapOverzicht.php');
include_once('lib/Aap.php');

$ao = new AapOverzicht();
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Baviaan&tbm=isch \">", "Baviaan"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Guereza&tbm=isch \">", "Guereza"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Langoer&tbm=isch \">", "Langoer"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Neusaap&tbm=isch \">", "Neusaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Tamarin&tbm=isch \">", "Tamarin"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Brulaap&tbm=isch \">", "Brulaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Halfaap&tbm=isch \">", "Halfaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Mandril&tbm=isch \">", "Mandril"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Oeakari&tbm=isch \">", "Oeakari"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Faunaap&tbm=isch \">", "Faunaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Hoelman&tbm=isch \">", "Hoelman"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Meerkat&tbm=isch \">", "Meerkat"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Oormaki&tbm=isch \">", "Oormaki"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Gorilla&tbm=isch \">", "Gorilla"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Kuifaap&tbm=isch \">", "Kuifaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Mensaap&tbm=isch \">", "Mensaap"));
$ao->voegAapToe(new Aap("<a class=\"aap\" href=\"https://www.google.nl/search?q=Spinaap&tbm=isch \">", "Spinaap"));

?>

<html>
<head>
    <title>Monkey Business</title>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type="text/css" href="index.css">
    <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
</head>
<body>
<img src="img/monkey-business.jpg">
<p>Select your monkey!</p>
<img src="img/monkey_swings.png">

<?php
foreach ($ao->getApen() as $aap) {
    echo $aap->getWebsite().$aap->getAap()."<br>";
}
?>
</body>