<?php require "includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php require "includes/head.php"; ?>

<body>
  <div id="wrapper">

    <?php include "includes/header.php"; ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <?php require "includes/last_news_block.php"; ?>
            <?php require "includes/gadgets_block.php"; ?>
            <?php require "includes/programming_block.php"; ?>
          </section>

            <!-- Секция сайдбара - топ новостей -->
          <section class="content__right col-md-4">
            <?php include "includes/sidebar.php"; ?>
            <!-- Секция сайдбара  - комментарии-->
            <?php include "includes/sidebar_comments.php"; ?>
          </section>
        </div>
      </div>
    </div>
   <?php include "includes/footer.php";?>
  </div>
</body>
</html>