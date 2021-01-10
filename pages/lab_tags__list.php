<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="lab_home.php">Lab</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tag Name</li>
    </ol>
  </nav>
  <h1 class="my-5">Tag Name</h1>
  <nav class="nav nav-pills mb-3">
    <?php
      for ($posts = 1; $posts <= 8; $posts++) { ?>
        <a href="lab_tags__list.php" class="nav-link<?php if ($posts == 3) { ?> active<?php } ?>">Tag Name</a>
      <?php }
    ?>
  </nav>
  <div class="d-flex flex-wrap">
    <?php
      for ($posts = 1; $posts <= 5; $posts++) {
        include '../snippets/lab__list.php';
      }
    ?>
  </div>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
