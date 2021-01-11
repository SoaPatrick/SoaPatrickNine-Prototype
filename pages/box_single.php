<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="box_home.php">Box</a></li>
      <li class="breadcrumb-item"><a href="box_archive__home.php">Storage</a></li>
      <li class="breadcrumb-item"><a href="box_archive__list.php">Year Month</a></li>
      <li class="breadcrumb-item active" aria-current="page">Blog Post Title</li>
    </ol>
  </nav>
  <?php include '../snippets/blog-post__full.php'; ?>
  <?php include '../snippets/navigation_box__single.php'; ?>
  <h2 class="mt-5">Related Posts</h2>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
