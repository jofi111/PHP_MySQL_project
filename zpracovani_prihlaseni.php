<?php
include 'index.php';

session_start();

include 'dblogin.php';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

$login = addslashes($_POST['login']);
$heslo = addslashes($_POST['heslo']);

$sql = "SELECT * FROM bankomat WHERE login = '$login' AND heslo = '$heslo'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['login'] = $row['login'];
    header("Location: proregistrovane.php");
} else {
    echo "Špatné přihlašovací údaje.";
}

$conn->close();
?>
