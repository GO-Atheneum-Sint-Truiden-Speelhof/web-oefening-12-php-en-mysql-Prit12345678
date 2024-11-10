<!DOCTYPE html>
<html lang="nl">


<div class="jumbotron">
    <h1 class="display-4">Hier is je formulier.</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php 
            echo '<p>Naam: '.$_POST["naam"].'</p>';
            echo '<p>Straat: '.$_POST["straat"].'</p>';
            echo '<p>Postcode: '.$_POST["postcode"].'</p>';
            echo '<p>Gemeente: '.$_POST["gemeente"].'</p>'; 
            echo '<p>Telefoonnummer: '.$_POST["telefoon"].'</p>'; 
            echo '<p>E-mailadres: '.$_POST["email"].'</p>'; 
            echo '<p>Geboortedatum: '.$_POST["geboortedatum"].'</p>'; 
            echo '<p>Titel foto: '.$_POST["fotoTitel"].'</p>'; 
            echo '<p>Camera: '.$_POST["camera"].'</p>'; 
            echo '<p>Lens: '.$_POST["lens"].'</p>'; 
            echo '<p>Beschrijving foto: '.$_POST["beschrijving"].'</p>'; 
        ?>
    </div>
</div>
<?php
include("includes/functions.php")
?>



<?php

$to = "test@localhost"; 
$subject = "Inzending formulier";  

$bericht = 'Naam: '.$_POST['naam'].'
Straat: '.$_POST['straat'].'
Gemeente: '.$_POST['gemeente'].' 
Postcode: '.$_POST['postcode'].'
Telefoonnummer: '.$_POST['telefoon'].'
E-mail adres: '.$_POST['email'].'
Geboortedatum: '.$_POST['geboortedatum'].'
Titel foto: '.$_POST['fotoTitel'].'
Camera: '.$_POST['camera'].'
Lens: '.$_POST['lens'].'
Beschrijving: '.$_POST['beschrijving'];

$headers = "From: Test User <test@localhost>";

$message = $bericht;

if(mail($to, $subject, $message, $headers)) 
{
    echo "E-mail verzonden";
} 

else
{
    echo "E-mail niet verzonden";
}

$con=mysqli_connect("localhost", "test", "123", "test");


?>
