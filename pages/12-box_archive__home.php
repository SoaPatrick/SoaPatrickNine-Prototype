<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="01-home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="10-box_home.php">Box</a></li>
      <li class="breadcrumb-item active" aria-current="page">Archive</li>
    </ol>
  </nav>
  <h1 class="my-5">Archive</h1>
  <div class="d-flex flex-wrap">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/archive__year.php';
      }
    ?>
  </div>
</div>


<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
