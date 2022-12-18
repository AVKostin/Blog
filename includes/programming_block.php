<div class="block">
  <a href="/articles.php?categorie=4">Все записи</a>
  <h3>Программирование [Новейшее]</h3>
  <div class="block__content">
    <div class="articles articles__horizontal">

    <?php
        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 4 ORDER BY `id` DESC LIMIT 4");
        // Установили лимит "2-х" "Свежих (DESC)" статей на блок
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
        <?php
      }
    ?>
    </div>
  </div>
</div>

