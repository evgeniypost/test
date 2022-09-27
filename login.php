<?php
ini_set("display_errors", 0);
ini_set("display_startup_errors", 0);
error_reporting(E_ALL);
session_start();
if ($_SESSION["user"]) {
    header("Location: profile.php");
}
?>
<!Doctype html>
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <title>Тестовое задание</title>
</head>
<body>
<form>
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <p class="msg none" id="1"></p>
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <p class="msg none" id="2"></p>
    <button type="submit" class="login-btn">Войти</button>
    <p> У вас нет аккаунта?<a href="signup.php"> Пройди регистрацию</a>.</p>
</form>

<script src="assets/jquery-3.6.1.js"></script>
<script src="assets/main.js"></script>

</body>