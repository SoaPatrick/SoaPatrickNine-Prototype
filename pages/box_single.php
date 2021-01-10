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
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
