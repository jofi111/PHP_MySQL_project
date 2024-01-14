<?php
function menu() {
    echo "<ul>";
    echo "<li><a href='registrace.php'>Registrace</a></li>";
    echo "<li><a href='proregistrovane.php'>Pro registrované</a></li>";
    echo "<li><a href='odhlasit.php'>Odhlásit se</a></li>";
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Menu</title>
</head>
<body>
<h1>Menu</h1>
<?php
menu();
?>
</body>
</html>
