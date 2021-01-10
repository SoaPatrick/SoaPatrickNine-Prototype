<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="factory_home.php">Factory</a></li>
      <li class="breadcrumb-item active" aria-current="page">Factory Title</li>
    </ol>
  </nav>
  <?php include '../snippets/factory__full.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
