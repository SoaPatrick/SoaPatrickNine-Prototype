<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main main--wide">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Tag Name</span>
    <span class="breadcrumbs__item"><a href="factory_home.php">Factory</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <section class="post">
    <header>
      <h1>Tag Name</h1>
    </header>
  </section>
  <nav class="tags">
    <?php
      for ($posts = 1; $posts <= 8; $posts++) { ?>
        <a href="factory_tags__list.php" class="<?php if ($posts == 3) { ?> active<?php } ?>">Tag Name</a>
      <?php }
    ?>
  </nav>
  <div class="tiles-grid">
    <?php
      for ($posts = 1; $posts <= 5; $posts++) {
        include '../snippets/factory__teaser.php';
      }
    ?>
  </div>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
