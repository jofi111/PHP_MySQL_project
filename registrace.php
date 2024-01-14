<?php include 'index.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Registrace</title>
</head>
<body>
<h3>Registrace</h3>

<form method="POST" action="zpracovani_registrace.php">
    Křestní jméno:
    <input name="jmeno" type="text"><br>
    Příjmení:
    <input name="prijmeni" type="text"><br>
    Login:
    <input name="login" type="text"><br>
    Heslo:
    <input name="heslo" type="password"><br>
    <input type="submit" value="Registrovat">
</form>

</body>
</html>
