<!DOCTYPE html>
<html lang="en">

<div class="jumbotron">
<h1 class="display-4">Je foto insturen</h1>
</div>

<div class="row">
<div class="col-md tegel">
<p>Bedankt voor je deelname! Dit is de informatie die je ons hebt
doorgestuurd:</p>

<?php

// gegevens uit de sessie weergeven

session_start();

echo '<p>Naam: '.$_SESSION['naam'].'<br>
        Straat: '.$_SESSION['straat'].'<br>


?>