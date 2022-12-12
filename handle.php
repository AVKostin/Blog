<?php

// print_r($_POST);
include('includes/db.php');

$login = $_POST['login'];
$password = $_POST['password'];

// echo "Ваш логин: " . $_POST['login'] . '<br>';
// echo "Ваш пароль: " . $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($count) == 0) {
  echo 'Вы не зарегистрированы, <br>либо неверно введен логин или пароль';
} else {
  echo 'Привет, ' . $login . '!';
}
