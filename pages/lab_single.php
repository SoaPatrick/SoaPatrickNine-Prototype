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
  <h2 class="mt-5">Related Posts</h2>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
  <?php include '../snippets/navigation_lab__single.php'; ?>
</div>
<aside class="related">
  <h2 class="mt-5">Related Lab Items</h2>
  <div class="d-flex flex-wrap">
    <?php
      for ($posts = 1; $posts <= 4; $posts++) {
        include '../snippets/lab__list.php';
      }
    ?>
  </div>
</aside>
<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
