<?php
include 'index.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Přihlášení</title>
</head>
<body>
<h1>Přihlášení</h1>
<form method="POST" action="zpracovani_prihlaseni.php">
    Login:
    <input name="login" type="text"><br>
    Heslo:
    <input name="heslo" type="password"><br>
    <input type="submit" value="Přihlásit">
</form>
</body>
</html>
