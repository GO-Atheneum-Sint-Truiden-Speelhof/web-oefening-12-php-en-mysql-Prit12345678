<?php


function checkLoginAndFetchMatch() {
    $servername = "localhost";
    $username = "test";
    $password = "123";
    $dbname = "test";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        
        $username = $conn->real_escape_string($_POST['username']);
        $wachtwoord = $conn->real_escape_string($_POST['wachtwoord']);

        
        $sql = "SELECT * FROM inschrijvers WHERE username = '$username' AND wachtwoord = '$wachtwoord'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
        } else {
            echo "<p class='message'>Onjuiste username of wachtwoord.</p>";
            return;
        }
    }

    
    $wedstrijdSql = "SELECT * FROM wedstrijd";
    $wedstrijdResult = $conn->query($wedstrijdSql);

    if ($wedstrijdResult->num_rows > 0) {
        echo '<div class="wedstrijd-grid">';

        while ($row = $wedstrijdResult->fetch_assoc()) {
            echo '<div class="wedstrijd-card">';
            echo '<h2>Wedstrijd Details</h2>';
            echo '<div class="wedstrijd-details">';
            foreach ($row as $columnName => $columnValue) {
                echo '<div class="detail-item">';
                echo '<span class="detail-label">' . ucfirst($columnName) . ':</span> ';
                echo '<span class="detail-value">' . (isset($columnValue) ? htmlspecialchars($columnValue) : 'Geen data beschikbaar') . '</span>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '<form method="POST" action="logout.php"><input type="submit" value="Logout"></form>';
    } else {
        echo "<p class='message'>Geen wedstrijdgegevens gevonden.</p>";
    }

    
    $conn->close();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    checkLoginAndFetchMatch();
}
?>


<?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true): ?>
    <form method="POST" action="">
        <label for="username">username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required><br>
        <input type="submit" value="Login">
    </form>
<?php endif; ?>