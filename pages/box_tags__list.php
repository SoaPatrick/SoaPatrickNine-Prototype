<?php
  $theme = 'default';
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
    <span class="breadcrumbs__item"><a href="box_home.php">Box</a></span>
    <span class="breadcrumbs__item"><a href="box_tags__home.php">Tags</a></span>
    <span class="breadcrumbs__item breadcrumbs__item--last">Tag Name</span>
  </nav>
  
  <header>
    <h1>Tags Name</h1>
  </header>
  <div class="site__content">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/blog-post__list.php';
      }
    ?>
    <?php include '../snippets/navigation_box__tags.php'; ?>
  </div>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
