<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main main--wide">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Factory</li>
    </ol>
  </nav>
  <h1 class="my-5">Factory</h1>
  <nav class="nav nav-pills mb-3">
    <?php
      for ($posts = 1; $posts <= 8; $posts++) { ?>
        <a href="factory_tags__list.php" class="nav-link">Tag Name</a>
      <?php }
    ?>
  </nav>
  <div class="d-flex flex-wrap">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/factory__list.php';
      }
    ?>
  </div>
  <?php include '../snippets/navigation_factory__home.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
