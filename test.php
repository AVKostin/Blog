<?php

$connection = mysqli_connect('localhost', 'root', '', 'test_db');
  if ($connection == false)
    {
      echo 'Не удалось подключиться к БД! <br>';
      echo mysqli_connect_error();
      exit();
    } else
    {
      // echo 'Connect to BD Sucsess';
    }

$result = mysqli_query($connection, "SELECT * FROM `articles_categories` ");
$totalCategories = mysqli_num_rows($result);
  if ($totalCategories == 0)
    {
      echo 'Категорий не найдено!';
    } else
    {
    ?>
      <ul>
        <?php
          while (($cat = mysqli_fetch_assoc($result))) {
            $articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS 'Total_count' FROM `articles` WHERE `categorie_id` = " . $cat['id']);
            $articles_count_result = mysqli_fetch_assoc($articles_count);
            echo '<li>' . $cat['title'] . '(' . $articles_count_result['Total_count'] . ')</li>';
          }
        ?>
      </ul>
    <?php
  }
?>

<?php mysqli_close($connection); ?>