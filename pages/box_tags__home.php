<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="box_home.php">Box</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tags</li>
    </ol>
  </nav>
  <h1 class="my-5">Tags</h1>
  <div>
    <?php
      for ($posts = 1; $posts <= 20; $posts++) { ?>
        <a href="box_tags__list.php" class="btn btn-primary mb-3 me-3">Tag Name</a>
      <?php }
    ?>
  </div>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
