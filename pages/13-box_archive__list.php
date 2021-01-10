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
      <li class="breadcrumb-item active" aria-current="page">Month</li>
    </ol>
  </nav>
  <h1 class="my-5">Month</h1>
  <?php
    for ($posts = 1; $posts <= 20; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
