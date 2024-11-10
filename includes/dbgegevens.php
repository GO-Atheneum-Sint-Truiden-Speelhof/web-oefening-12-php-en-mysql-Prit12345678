<!DOCTYPE html>
<html lang="en">

<?php
$servernaam = "localhost";
$gebruikersnaam = "test";
$password = "123"; 
$dbname = "test";

$conn = new mysqli($servernaam, $gebruikersnaam, $password, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM wedstrijd";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Wedstrijd ID: " . $row["id"] . " - Naam: " . $row["naam"] . " - Datum: " . $row["datum"] . "<br>";
    }
} else {
    echo "Geen resultaten gevonden.";
}

$conn->close();
?>