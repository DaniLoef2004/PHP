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
body {
text-align:center;
}
</style>
</head>
<body>
<?php
for($i = 0; $i <= 9; $i++) {
for($j =0; $j<$i; $j++) {
echo "*";
}
echo "*<br>";
}
?>
</body>
</html>