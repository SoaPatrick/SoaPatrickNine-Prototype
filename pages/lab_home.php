<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main main--wide">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Lab</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <section class="post">
    <header>
      <h1>SoapLab</h1>
    </header>
    <main>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
    </main>
  </section>
  <div class="masonry-grid">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/lab__teaser.php';
      }
    ?>
  </div>
  <?php include '../snippets/navigation_lab__home.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
