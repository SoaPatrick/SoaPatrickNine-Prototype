<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Year Month</span>
    <span class="breadcrumbs__item"><a href="box_archive__home.php">Storage</a></span>
    <span class="breadcrumbs__item"><a href="box_home.php">Box</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>


  <header>
    <h1>Year Month</h1>
  </header>
  <div class="site__content">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/blog-post__list.php';
      }
    ?>
    <?php include '../snippets/navigation_box__archive.php'; ?>
  </div>
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
