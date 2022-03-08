<?php
  $theme = 'default';
  include '../templates/head.php';
?>

<div class="wrapper">
  <h1>Factory Patterns</h1>

  <hr>
  <h5>Factory Post Teaser</h5>
  <?php include '../snippets/factory__teaser.php'; ?>

  <hr>
  <h5>Factory Post List</h5>
  <?php include '../snippets/factory__list.php'; ?>

  <hr>
  <h5>Factory Post full</h5>
  <?php include '../snippets/factory__full.php'; ?>
</div>

<?php
  include '../templates/foot.php';
?>
