<?php
/**
* Created By PHPstorm.
* User: Dani Loef
* Date 20-10-22
* Time 12:53
*/
?>

<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;

if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;

?>
</body>
</html>