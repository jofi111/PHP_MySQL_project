<?php include 'index.php';

session_start();
if (empty($_SESSION['login'])) {
    echo "<h1>Pro registrované</h1>";
    echo "<p>Pro zobrazení této stránky se musíte přihlásit.</p>";
    echo "<p><a href='prihlaseni.php'>Přihlásit se</a></p>";
    die;
}

elseif (!isset($_SESSION['login'])) {
    header("Location: prihlaseni.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Pro registrované</title>
</head>
<body>

<?php
echo '<h1>Vítejte, ' . $_SESSION['login'] . '!</h1>';
?>

<p>Toto je obsah pro registrované uživatele.</p>

</body>
</html>
