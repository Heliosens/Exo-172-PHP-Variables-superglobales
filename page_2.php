<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>variables de session</title>
</head>
<body>
<?php
echo $_SESSION['lastName'] . "<br>";
echo $_SESSION['name'] . "<br>";
echo $_SESSION['age'];
?>
    <nav>
        <a href="index.php">home</a>
        <a href="page_3.php">page 3</a>
        <a href="/page_4.php">page 4</a>
    </nav>

</body>
</html>

