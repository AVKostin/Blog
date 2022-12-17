<?php
  require "includes/config.php";
?>
<div class="block">
  <h3>Комментарии</h3>
  <div class="block__content">
    <div class="articles articles__vertical">

    <?php
        $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 5");
        // Установили лимит "2-х" "Свежих (DESC)" статей на блок
        ?>

      <?php
            while( $comment = mysqli_fetch_assoc($comments))
        {
      ?>
            <article class="article">
                <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email'])?>);">
                </div>
                <div class="article__info">
                  <a href="/article.php?id=<?php echo $comment['articles_id'] ?>"><?php echo $comment['author']?></a>
                <div class="article__info__meta"></div>
                <div class="article__info__preview"><?php echo mb_substr(strip_tags($comment['text']),0, 50, 'utf-8'),' ...' ?></div>
                </div>
            </article>
          <?php
        }
      ?>
    </div>
  </div>
</div>