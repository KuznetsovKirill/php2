<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Пользователь: <?php echo $_SESSION['login'] ?></p> <br>
<?php

$_SESSION['FirstName'] = $_POST['FirstName'];
$_SESSION['SecondName'] = $_POST['SecondName'];
$_SESSION['Date'] = $_POST['Date'];
$_SESSION['Age'] = $_POST['Age'];
echo $_SESSION['FirstName'].'<br>';
echo $_SESSION['SecondName'].'<br>';
echo $_SESSION['Date'].'<br>';
echo $_SESSION['Age'].'<br>';

?>
</body>
<br><a href="adm1.php">Редактировать!</a>
<br><a href="adm2.php">Вам будет интесресно!</a>
<br><a href="index.php">Выйти</a>
</html>