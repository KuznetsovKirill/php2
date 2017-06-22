<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>Войдите</h1>

</body>
<form method="POST" action="handler.php">
    <label>Логин:<br></label>
    <input type="text" name="login">

    <label><br>Пароль:<br></label>
    <input type="password" name="password">

    <button type="submit">Перейти</button>
</form>
</body>
</html>
