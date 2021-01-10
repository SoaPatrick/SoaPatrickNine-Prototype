<?php
  include '../templates/head.php';
?>

<div class="container my-5">
  <h1>Lab Patterns</h1>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Lab Post List</span></h5>
  <?php include '../snippets/lab__list.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Lab Post Teaser</span></h5>
  <?php include '../snippets/lab__teaser.php'; ?>

  <hr class="mt-5">
  <h5><span class="badge bg-danger">Lab Post full</span></h5>
  <?php include '../snippets/lab__full.php'; ?>
</div>

<?php
  include '../templates/foot.php';
?>
