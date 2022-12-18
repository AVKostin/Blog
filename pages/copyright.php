<?php require "../includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php require "../includes/head.php"; ?>

<body>
  <div id="wrapper">

    <?php include "../includes/header.php"; ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h2>Правообладатель сайт</h2>
              <div class="block__content">
                <!-- <img src="/media/images/post-image.jpg"> -->

                <div class="full-text">
                  <h3>Правообладателем сайта является хороший человек</h3>
                </div>
              </div>
            </div>
          </section>
          <!-- Секция сайдбара -->
          <section class="content__right col-md-4">
            <?php include "../includes/sidebar.php"; ?>
          </section>
        </div>
      </div>
    </div>
    <?php include "../includes/footer.php";?>

  </div>

</body>
</html>

