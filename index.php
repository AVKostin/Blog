<?php
  require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title']; ?></title>
    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>
  <div id="wrapper">
  <?php include "includes/header.php"; ?>
    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="/articles.php?categorie=1">Все записи</a>
              <h3>Последние новости</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 1 ORDER BY `id` DESC LIMIT 4");
                    // Установили лимит "2-х" "Свежих (DESC)" статей на блок

                      while( $art = mysqli_fetch_assoc($articles))
                  {
                    ?>

                      <article class="article">
                          <div class="article__image" style="background-image: url(/media/images/post-image.jpg);">
                          </div>
                          <div class="article__info">
                            <a href="/article.php?id=<?php echo $art['id'] ?>"><?php echo $art['title']?></a>
                              <div class="article__info__meta">
                                    <?php
                                    $art_cat = false;
                                        foreach($categories as $cat)
                                        {
                                          if( $cat['id'] == $art['categorie_id']){
                                            $art_cat = $cat;
                                            break;
                                          }
                                        }
                                    ?>
                                    <small>Категория: <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']?></a>
                                    </small>
                              </div>
                                  <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']),0, 100, 'utf-8'),' ...' ?>
                                  </div>
                          </div>
                      </article>
                      <?php
                  }
                    ?>

                </div>
              </div>
            </div>
            <div class="block">
              <a href="/articles.php?categorie=2">Все записи</a>
              <h3>Гаджеты, Техника [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 2 ORDER BY `id` DESC LIMIT 2");
                    // Установили лимит "2-х" "Свежих (DESC)" статей на блок
                  //   ?>

                  // <?php
                      while( $art = mysqli_fetch_assoc($articles))
                  {
                    ?>
                  <article class="article">
                  <div class="article__image" style="background-image: url(/media/images/<?php echo $art['image']?>);">
                      </div>
                      <div class="article__info">
                        <a href="/article.php?id=<?php echo $art['id'] ?>"><?php echo $art['title']?></a>
                        <div class="article__info__meta">
                          <?php
                          $art_cat = false;
                              foreach($categories as $cat)
                              {
                                if( $cat['id'] == $art['categorie_id']){
                                  $art_cat = $cat;
                                  break;
                                }
                              }
                          ?>
                          <small>Категория: <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']?></a></small>
                        </div>
                        <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']),0, 100, 'utf-8'),' ...' ?></div>
                      </div>
                  </article>
                    <?php } ?>
                </div>
              </div>
            </div>
            <div class="block">
              <a href="/articles.php?categorie=5">Все записи</a>
              <h3>Программирование [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                <?php
                    $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 5 ORDER BY `id` DESC LIMIT 4");
                    // Установили лимит "2-х" "Свежих (DESC)" статей на блок
                  //   ?>
                  // <?php
                      while( $art = mysqli_fetch_assoc($articles))
                  {
                    ?>
                  <article class="article">
                  <div class="article__image" style="background-image: url(/media/images/<?php echo $art['image']?>);">
                      </div>
                      <div class="article__info">
                            <a href="/article.php?id=<?php echo $art['id'] ?>"><?php echo $art['title']?></a>
                            <div class="article__info__meta">
                              <?php
                              $art_cat = false;
                                  foreach($categories as $cat)
                                  {
                                    if( $cat['id'] == $art['categorie_id']){
                                      $art_cat = $cat;
                                      break;
                                    }
                                  }
                              ?>
                          <small>Категория:
                            <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']?></a>
                          </small>
                        </div>
                        <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']),0, 100, 'utf-8'),' ...' ?></div>
                      </div>
                  </article>
                    <?php } ?>

                </div>
              </div>
            </div>
          </section>
  <!-- Секция сайдбара - топ новостей -->
            <section class="content__right col-md-4">
            <?php include "includes/sidebar.php";
            ?>
  <!-- Секция сайдбара  - комментарии-->
            <?php include "includes/sidebar_comments.php";
            ?>
          </section>
        </div>
      </div>
    </div>
        <?php include "includes/footer.php";?>
  </div>
</body>
</html>