<?php require "includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php require "includes/head.php"; ?>

<body>
  <div id="wrapper">

    <?php include "includes/header.php"; ?>

    <div class="block">
      <a href="/articles.php?categorie=<?php echo $art['id'] ?>">Все записи</a>
      <?php
      $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 4 ORDER BY `id` DESC LIMIT 4");
      // Установили лимит "2-х" "Свежих (DESC)" статей на блок
      while ($art = mysqli_fetch_assoc($articles)) {
      ?>
      <?php
        $art_cat = false;
        foreach ($categories as $cat) {
          if ($cat['id'] == $art['categorie_id']) {
            $art_cat = $cat;
            break;
          }
        }
        ?>
      <h3><?php echo $art_cat['title'] ?></h3>
      <div class="block__content">
        <div class="articles articles__horizontal">

          <article class="article">
            <div class="article__image" style="background-image: url(/media/images/<?php echo $art['image'] ?>);">
            </div>
            <div class="article__info">
              <a href="/article.php?id=<?php echo $art['id'] ?>"><?php echo $art['title'] ?></a>
              <div class="article__info__meta">

                <small>Категория:
                  <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title'] ?></a>
                </small>
              </div>
              <div class="article__info__preview">
                <?php echo mb_substr(strip_tags($art['text']), 0, 100, 'utf-8'), ' ...' ?></div>
            </div>
          </article>
          <?php
        }
          ?>
        </div>
      </div>
    </div>

    <?php
    if ($articles_exist = true) {
      echo '<div class="paginator">';
      if ($page > 1) {
        echo '<a href="/articles.php?page=' . ($page - 1) . '">&laquo;  Предыдущая страница   </a>';
      }
      if ($page < $total_pages) {
        echo '<a href="/articles.php?page=' . ($page + 1) . '">   Следующая страница  &raquo;</a>';
      }
      echo '</div>';
    }
    ?>
  </div>
  </div>
  </section>
  <section class="content__right col-md-4">

    <!-- Секция сайдбара - топ новостей -->
    <?php include "includes/sidebar.php"; ?>
    <!-- Секция сайдбара  - комментарии-->
    <?php include "includes/sidebar_comments.php"; ?>
  </section>
  </div>
  </div>
  </div>

  <?php include "includes/footer.php"; ?>
  </div>
</body>

</html>