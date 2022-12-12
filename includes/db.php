<?php

$connection = mysqli_connect('localhost', 'root', '', 'test_db');

if ($connection == false) {
  echo 'Не удалось подключиться к БД! <br>';
  echo mysqli_connect_error();
  exit();
} else {
  // echo 'Connect to BD Sucsess <br>';
}
