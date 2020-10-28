<?php

if($_POST["email"] == "") {
echo "Je moet nog een email invullen";
echo "<br><a href=/H05/H05-2/H05-2.php>Terug naar het formulier</a><br>";
} else {
echo $_POST[email];
};

if($_POST["wachtwoord"] == "") {
echo "Je moet nog een wachtwoord invullen";
echo "<br><a href=/H05/H05-2/H05-2.php>Terug naar het formulier</a><br>";
};

if($_POST["adres"] == "") {
echo "Je moet nog een adres invullen";
echo "<br><a href=/H05/H05-2/H05-2.php>Terug naar het formulier</a><br>";
} else {
echo $_POST[adres];
  };

if($_POST["voornaam"] == "") {
echo "Je moet nog een naam invullen";
echo "<br><a href=/H05/H05-2/H05-2.php>Terug naar het formulier</a><br>";
}else {
echo $_POST[voornaam];
 };
