<?php
session_start();
$_SESSION['lastName'] = 'Bataille';
$_SESSION['name'] = 'Sylvie';
$_SESSION['age'] = '46 ans';

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>variable superglobales</title>
</head>
<body>
<?php
    echo "<p>User Agent : " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
    echo "<p>Adresse ip : " . $_SERVER['REMOTE_ADDR'] . "</p>";
    echo "<p>Nom du serveur : " . $_SERVER['SERVER_NAME'] . "</p>";
?>

    <form action="index.php" method="post">
        <input type="text" name="userLogin" placeholder="login">
        <input type="password" name="userPwd" placeholder="mot de passe">
        <input type="submit" name="submit">
    </form>
    <nav>
        <a href="/page_2.php">page 2</a>
        <a href="/page_3.php">page 3</a>
        <a href="/page_4.php">page 4</a>
    </nav>

</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        setcookie('login', $_POST['userLogin']);
        setcookie('password', $_POST['userPwd']);
    }
