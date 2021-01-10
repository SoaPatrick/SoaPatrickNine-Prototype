<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="01-home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="10-box_home.php">Box</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tags</li>
    </ol>
  </nav>
  <h1 class="my-5">Tags</h1>
  <div>
  <?php
    for ($posts = 1; $posts <= 20; $posts++) { ?>
      <a href="15-box_tags__list.php" class="btn btn-primary btn-lg mb-3 me-3">Tag Name</a>
    <?php }
  ?>
  </div>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
