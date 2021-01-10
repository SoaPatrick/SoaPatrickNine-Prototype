<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main main--wide">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="box_home.php">Box</a></li>
      <li class="breadcrumb-item active" aria-current="page">Storage</li>
    </ol>
  </nav>
  <h1 class="my-5">Storage</h1>
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
