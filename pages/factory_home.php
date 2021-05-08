<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main main--wide">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Factory</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <section class="post">
    <header>
      <h1>SoapFactory</h1>
    </header>
    <main>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
    </main>
  </section>
  <nav class="tags">
    <?php
      for ($posts = 1; $posts <= 8; $posts++) { ?>
        <a href="factory_tags__list.php">Tag Name</a>
      <?php }
    ?>
  </nav>
  <div class="tiles-grid">
    <?php
      for ($posts = 1; $posts <= 20; $posts++) {
        include '../snippets/factory__teaser.php';
      }
    ?>
  </div>
  <?php include '../snippets/navigation_factory__home.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
