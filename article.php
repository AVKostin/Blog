<?php require "includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php require "includes/head.php"; ?>

<body>
  <div id="wrapper">

    <?php include "includes/header.php"; ?>
        <?php
          $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = ". (int) $_GET['id']);
          if( mysqli_num_rows($article) <= 0)
            {
              ?>
                <div id="content">
                  <div class="container">
                    <div class="row">
                      <section class="content__left col-md-8">
                        <div class="block">
                          <h3>статья не найдена</h3>
                          <div class="block__content">
                          <img src="/media/images/<?php echo $art['image'];?>" style="max-width: 100%">
                            <div class="full-text">
                              Запрашиваемая статья не существует!
                            </div>
                          </div>
                        </div>
                      </section>
                      <!-- Секция сайдбара -->
                      <section class="content__right col-md-4">
                        <?php include "includes/sidebar.php";
                        ?>
                      </section>
                    </div>
                  </div>
                </div>
          <?php
        } else
        {
      $art = mysqli_fetch_assoc($article);
      mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` =" . (int) $art['id']);
      ?>
      <div id="content">
      <div class="container">
        <div class="row">

          <section class="content__left col-md-8">
            <div class="block">
              <a><?php echo $art['views'] ?> просмотров</a>
              <h3><?php echo $art['title'];?></h3>
              <div class="block__content">
                <img src="/media/images/<?php echo $art['image']?>">
                <div class="full-text">
                <?php  echo $art['text']?>
                </div>
              </div>
              </div>

              <!-- Комментарии -->
              <?php include "includes/comments_block.php" ?>
            </div>

            <?php include "includes/comment_add_form.php" ?>
          </section>
          <!-- Секция сайдбара -->
          <section class="content__right col-md-4">
            <?php include "includes/sidebar.php"; ?>
            <!-- Секция сайдбара  - комментарии-->
            <?php include "includes/sidebar_comments.php"; ?>
          </section>
        </div>
      </div>
    </div>

    <?php
    }
  ?>
    <?php include "includes/footer.php";?>
  </div>
</body>
</html>