<?php
if($_GET) {
    $celcius = $_GET["celcius"];
    $fahrenheit = $celcius * 1.8 + 32;
}
?>

<!DOCTYPE html>
<html>
<body>
    <form action="" method="get">
    <input type="text" name="celcius" /><br>

        <?php

        if(isset($fahrenheit)){
            echo "fahrenheit = ".$fahrenheit;
        }
        ?>
    </form>
</body>
</html>