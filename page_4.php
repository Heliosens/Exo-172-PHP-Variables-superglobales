<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>change cookie</title>
</head>
<body>
<form action="page_4.php" method="post">
    <input type="text" name="newLogin">
    <input type="password" name="newPass">
    <input type="submit" name="newData">
</form>
<?php
    if (isset($_POST['newData'])) {
        if(isset($_POST['newLogin'])){
            setcookie('login', $_POST['newLogin']);
        }
        if(isset($_POST['newPass'])){
            setcookie('password', $_POST['newPass']);
        }
    }
?>
    <nav>
        <a href="index.php">home</a>
        <a href="page_2.php">page 2</a>
        <a href="/page_3.php">page 3</a>
    </nav>
</body>
</html>


