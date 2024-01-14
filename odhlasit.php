<?php  include 'zkbankomat.php';

session_start();
unset($_SESSION['login']);
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Odhlásit</title>
</head>
<body>
<h3>Odhlásit</h3>
<p>Byli jste úspěšně odhlášeni.</p>
<p><a href="prihlaseni.php">Přihlásit se znovu</a></p>
</body>
</html>
