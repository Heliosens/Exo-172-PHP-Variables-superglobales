<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>affichage des cookies</title>
</head>
<body>
<?php
    if (isset($_COOKIE)) {
        echo "<p>Login : " . $_COOKIE['login'] . "</p>";
        echo "<p>password : " . $_COOKIE['password'] . "</p>";
    }
?>
    <nav>
        <a href="index.php">home</a>
        <a href="page_2.php">page 2</a>
        <a href="/page_4.php">page 4</a>
    </nav>

</body>
</html>


