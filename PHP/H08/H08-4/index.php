<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <h1>Bakkerij</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Overzicht</a></li>
        <li><a href="page2.php">Broodjes toevoegen</a></li>
    </ul>
</nav>
<h2>Broodjes weergeven</h2>
<div class="container">
    <table id="broodjes">
        <?php
        require("Broodjes.php");
        $display = new Broodjes();
        echo '<tr>';
        echo '<td> <b>Meel</b></td>';
        echo '<td> <b>Vorm</b></td>';
        echo '<td> <b>Gewicht</b></td>';
        echo '</tr>';
        $display->displayBrood();
        ?>
    </table>
</div>
</body>
</html>