<!DOCTYPE html>
<html lang="en">
<?php
function saveToDB() {
    $servername = "localhost";
    $username = "test";
    $password = "123";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO wedstrijd (Naam, StraatNR, Postcode, Gemeente, Telefoon, Email, Gebdatum, Foto, Camera, Lens, Beschrijving) VALUES ('" 
            . $_POST["naam"] . "', '" 
            . $_POST["straat"] . "', '" 
            . $_POST["postcode"] . "', '" 
            . $_POST["gemeente"] . "', '" 
            . $_POST["telefoon"] . "', '" 
            . $_POST["e-mail"] . "', '" 
            . $_POST["geboortedatum"] . "', '" 
            . $_POST["fotoTitel"] . "', '" 
            . $_POST["camera"] . "', '" 
            . $_POST["lens"] . "', '" 
            . $_POST["beschrijving"] . "');";

        echo $sql;

        if ($conn->query($sql) === TRUE) {
            echo "New record created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
</html>