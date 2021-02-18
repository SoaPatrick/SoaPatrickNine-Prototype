<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="factory_home.php">Factory</a></li>
      <li class="breadcrumb-item active" aria-current="page">Factory Title</li>
    </ol>
  </nav>
  <?php include '../snippets/factory__full.php'; ?>
  <h2 class="mt-5">Related Posts</h2>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
  <?php include '../snippets/navigation_factory__single.php'; ?>
</div>
<aside class="related">
  <h2 class="mt-5">Related Factory Items</h2>
  <div class="d-grid">
    <?php
      for ($posts = 1; $posts <= 4; $posts++) {
        include '../snippets/factory__list.php';
      }
    ?>
  </div>
</aside>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
