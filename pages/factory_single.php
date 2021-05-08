<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Factory Title</span>
    <span class="breadcrumbs__item"><a href="factory_home.php">Factory</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <?php include '../snippets/factory__full.php'; ?>
  <?php include '../snippets/navigation_factory__single.php'; ?>  
  <h2>Related Posts</h2>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
</div>
<aside>
  <h2>Related Factory Items</h2>
  <div class="tiles-grid">
    <?php
      for ($posts = 1; $posts <= 4; $posts++) {
        include '../snippets/factory__teaser.php';
      }
    ?>
  </div>
</aside>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
