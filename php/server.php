<?php

/* Standardangaben, wenn man nichts anderes konfiguriert
    hat (z.B. in phpMyAdmin o.ä.). */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lokaledatenbanken";

// Verbindug erstellen.
$connection = new mysqli($servername, $username, $password, $dbname);

// Verbindung testen.
if ($connection->connect_error) {
    die("Verbindung ist fehlgeschlagen: " . $connection->connect_error);
}
