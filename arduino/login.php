<?
//Запуск сессий;
session_start();

if (isset($_POST['login']) && isset($_POST['password']))
{
// получаем данные из формы с авторизацией
$login = $_POST['login'];
$password = $_POST['password'];
//проверка пароля и логина
if (($login=='master')&& ($password=='master')){
$_SESSION['Name']=$login;
// идем на страницу для авторизованного пользователя
header("Location: /osnovnai.php");
}
else
{die('Такой логин с паролем не найдены в базе данных.');
}
}
?>