<?php
  include '../templates/head.php';
?>

<div class="container my-5">
  <h1>Blog Post Patterns</h1>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Blog Post List</span></h5>
  <?php include '../snippets/blog-post__list.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Blog Post Teaser</span></h5>
  <?php include '../snippets/blog-post__teaser.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Blog Post full</span></h5>
  <?php include '../snippets/blog-post__full.php'; ?>
</div>

<?php
  include '../templates/foot.php';
?>
