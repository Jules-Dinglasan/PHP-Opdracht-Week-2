<form method="POST" action="">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" name="username" id="username" required>
    
    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" id="password" required>
    
    <input type="submit" value="Verzenden">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    echo "Gebruikersnaam: " . $username . "<br>";
    echo "Wachtwoord: " . $password . "<br>";
}
?>

<?php
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>