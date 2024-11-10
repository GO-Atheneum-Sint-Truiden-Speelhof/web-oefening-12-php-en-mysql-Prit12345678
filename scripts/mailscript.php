
<!DOCTYPE html>
<html lang="nl">

<?php

    session_start();

    $_SESSION['naam'] = $_POST['naam'];

    $_SESSION['straat'] = $_POST['straat'];

    $_SESSION['postcode'] = $_POST['postcode'];

    $_SESSION['gemeente'] = $_POST['gemeente'];

    $_SESSION['telefoon'] = $_POST['telefoon'];

    $_SESSION['email'] = $_POST['email'];

    $_SESSION['geboortedatum'] = $_POST['geboortedatum'];

    $_SESSION['titel'] = $_POST['titel'];

    $_SESSION['camera'] = $_POST['camera'];

    $_SESSION['lens'] = $_POST['lens'];

    $_SESSION['beschrijving'] = $_POST['beschrijving'];

    //een nieuwe pagina openen

    header("Location: begin.php?page=upload");
?>

</html>
