<?php
session_start();

$adm = array(
    'admin' => '11'
);
$user = array (
    'user' => "22"
);

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (isset($adm[$_POST['login']]) && $adm[$_POST['login']] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        header('Location: adm1.php');
    }
    if (isset($user[$_POST['login']]) && $user[$_POST['login']]==$_POST['password']) {
        $_SESSION['login']=$_POST['login'];
        header('Location: adm1.php');
    }
    }
 else {
    header('Location: index.php');
}

