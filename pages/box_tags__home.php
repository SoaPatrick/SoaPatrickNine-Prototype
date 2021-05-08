<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Tags</span>
    <span class="breadcrumbs__item"><a href="box_home.php">Box</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <section class="post">
    <header>
      <h1>Tags</h1>
    </header>
  </section>
  <nav class="tags">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) { ?>
        <a href="box_tags__list.php">Tag Name</a>
      <?php }
    ?>
  </nav>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
