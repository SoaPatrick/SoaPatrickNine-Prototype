<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  
  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Storage</span>
    <span class="breadcrumbs__item"><a href="box_home.php">Box</a></span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>

  <section class="post">
    <header>
      <h1>Storage</h1>
    </header>
    <main>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
    </main>
  </section>
  <div class="storage-grid">
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
