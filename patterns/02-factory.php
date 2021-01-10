<?php
  include '../templates/head.php';
?>

<div class="container my-5">
  <h1>Factory Patterns</h1>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Factory Post List</span></h5>
  <?php include '../snippets/factory__list.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Factory Post Teaser</span></h5>
  <?php include '../snippets/factory__teaser.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Factory Post full</span></h5>
  <?php include '../snippets/factory__full.php'; ?>
</div>

<?php
  include '../templates/foot.php';
?>
