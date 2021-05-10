<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Factory Title</span>
    <span class="breadcrumbs__item"><a href="factory_home.php">Factory</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <?php include '../snippets/factory__full.php'; ?>
  <?php include '../snippets/navigation_factory__single.php'; ?>  
  <aside class="post">  
    <header>
      <h1>Related Posts</h1>
    </header>
    <?php
      for ($posts = 1; $posts <= 3; $posts++) {
        include '../snippets/blog-post__list.php';
      }
    ?>
  </aside>
  <aside class="post">
    <header>
      <h1>Related Factory Items</h1>
    </header>
    <div class="four-grid alignwide">
      <?php
        for ($posts = 1; $posts <= 4; $posts++) {
          include '../snippets/factory__teaser.php';
        }
      ?>
    </div>
  </aside>    
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
