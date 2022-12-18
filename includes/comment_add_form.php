<div id="comment-add-form" class="block">
  <h3>Добавить комментарий</h3>
  <div class="block__content">
    <form class="form" method="POST" action="/article.php?id=<?php echo $art['id']; ?> #comment-add-form">

      <?php
      //проверяем нажата ли кнопка и далее проверяем заполнены ли все поля формы ввода

      if (isset($_POST['do_post'])) {
        $errors = array();

        $name = $_POST["name"];
        $nickname = $_POST["nickname"];
        $email =  $_POST["email"];
        $text = $_POST["text"];

        if ($name == '') {
          $errors[] = 'Введите имя';
        }

        if ($nickname == '') {
          $errors[] = 'Введите Ваш никнем';
        }

        if ($email == '') {
          $errors[] = 'Введите Email';
        }

        if ($text == '') {
          $errors[] = 'Введите текст комментария!';
        }

        if (empty($errors)) {
          // Можем добавить комментарий

          mysqli_query($connection, "INSERT INTO  `comments` (`author`, `nickname`, `email`, `text`, `pubdate`, `articles_id`) VALUES ('" . $name . "', '" . $nickname . "', '" . $email . "', '" . $text . "', NOW(), '" . $art['id'] . "')");

          echo '<span style="color: green; font-weight: bold;margin-bottom:10px; display: block;">Комментарий успешно добавлен!</span>';
        } else {
          // Выводим ошибку на экран
          echo '<span style="color: red; font-weight: bold;margin-bottom:10px; display: block;">' . $errors['0']  . '</span>';
        }
      }
      ?>

      <div class="form__group">
        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form__control" name="name" placeholder="Имя"
              value="<?php echo $_POST['name']; ?>">
          </div>

          <div class="col-md-4">
            <input type="text" class="form__control" name="nickname" placeholder="Никнейм"
              value="<?php echo $nickname; ?>">
          </div>

          <div class="col-md-4">
            <input type="text" class="form__control" name="email" placeholder="Email (не будет показан)"
              value="<?php echo $email; ?>">
          </div>
        </div>
      </div>
      <div class="form__group">
        <textarea name="text" class="form__control" placeholder="Текст комментария ..."><?php echo $text; ?></textarea>
      </div>
      <div class="form__group">
        <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
      </div>
    </form>
  </div>
</div>