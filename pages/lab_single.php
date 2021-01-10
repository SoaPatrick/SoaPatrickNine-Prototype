<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="lab_home.php">Lab</a></li>
      <li class="breadcrumb-item active" aria-current="page">Lab Title</li>
    </ol>
  </nav>
  <?php include '../snippets/lab__full.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
