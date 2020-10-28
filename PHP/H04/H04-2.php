<?php
?>
<!DOCTYPE html>
<html>
<body>
<?php

/* Voer hier het getal in waarbij je wilt kijken of het deelbaar door 3 is */

$getalOmDoorTeDelen = 3;

/*--------------------------------------------------------------------------------*/

if (delen($getalOmDoorTeDelen)){
    echo "Tuurlijk kan dat!";
} else {
    echo "Kan toch niet man...";
}

function delen($a){
    if ($a % 3 == 0){
        return true;
    } else {
        return false;
    }
}
?>
</body>
</html>