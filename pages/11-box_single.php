<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="01-home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="10-box_home.php">Box</a></li>
      <li class="breadcrumb-item"><a href="12-box_archive__home.php">Archive</a></li>
      <li class="breadcrumb-item">Year</li>
      <li class="breadcrumb-item"><a href="13-box_archive__list.php">Month</a></li>
      <li class="breadcrumb-item active" aria-current="page">Blog Post Title</li>
    </ol>
  </nav>
  <?php include '../snippets/blog-post__full.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
