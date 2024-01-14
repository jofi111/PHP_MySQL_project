<?php
include 'index.php';
include 'dblogin.php';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

$jmeno = addslashes($_POST['jmeno']);
$prijmeni = addslashes($_POST['prijmeni']);
$login = addslashes($_POST['login']);
$heslo = addslashes($_POST['heslo']);

$sql = "INSERT INTO bankomat (jmeno, prijmeni, login, heslo) 
        VALUES ('$jmeno', '$prijmeni', '$login', '$heslo')";

if ($conn->query($sql) === TRUE) {
    echo "Registrace proběhla úspěšně.";
} else {
    echo "Chyba při registraci: " . $conn->error;
}

$conn->close();
?>
