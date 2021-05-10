<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Search</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>

  <section class="post">
    <header>
      <h1>Search</h1>
    </header>
  </section>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
  <?php include '../snippets/navigation_box__home.php'; ?>  
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
