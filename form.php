<?php

include('includes/db.php')
?>

<form method="POST" action="/handle.php">
  <input type="text" placeholder="Ваш логин" name="login">
  <input type="text" placeholder="Ваш пароль" name="password">
  <hr>
  <input type="submit" value="Подтвердить">
</form>
<?php
mysqli_close($connection);
?>