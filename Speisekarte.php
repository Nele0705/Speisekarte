<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$Datum = $_POST["Datum"];
$Hauptgericht = $_POST["Hauptgericht"];
$Beilage = $_POST["Beilage"];
$Salat = $_POST["Salat"];
$Nachspeise = $_POST["Nachspeise"];
$Vegetarisch = $_POST["Vegetarisch"];
echo "<html><head><title>Ihre pers&oumlnliche Bestellung</title></head><body><h1>Sie haben ihre pers&oumlnliche Bestellung nun abgegeben.
Bitte &uumlberpr&uumlfen Sie Ihre Bestellung!</h1></body></html>";
echo "<br />Hallo $vorname $nachname! Sind Sie mit ihrer Auswahl vom $Datum zufrieden?";
echo " Sie haben als Hauptgericht $Hauptgericht gew&aumlhlt. Als Beilage dazu m&oumlchten Sie $Beilage, anschlie&szligend soll es einen $Salat geben.
Als Nachspeise w&uumlschen Sie sich $Nachspeise.";
?></p>
