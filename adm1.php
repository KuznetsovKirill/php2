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

<form method="POST" action="adm11.php">
<label>Фамилия:<br></label>
<input type="text" name='FirstName'><br>
<label>Имя:<br></label>
<input type="text" name='SecondName'><br>
<label>Возраст:<br></label>
<input type="text" name='Age'><br>
<label>Дата Рождения:<br></label>
<input type="date" name='Date'><br>
    <br><button type="submit">Посмотреть введенные данные</button>
</form>
</body>
<br><a href="index.php">Выйти</a>
</html>
