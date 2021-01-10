<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="box_home.php">Box</a></li>
      <li class="breadcrumb-item"><a href="box_tags__home.php">Tags</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tag Name</li>
    </ol>
  </nav>
  <h1 class="my-5">Tag Name</h1>
  <?php
    for ($posts = 1; $posts <= 20; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
