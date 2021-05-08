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
    <div class="post__icon post__icon--section">
      <!-- <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
        <path fill="currentColor" d="M624 224H480V16c0-8.8-7.2-16-16-16H176c-8.8 0-16 7.2-16 16v208H16c-8.8 0-16 7.2-16 16v256c0 8.8 7.2 16 16 16h608c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-176 32h64v62.3l-32-10.7-32 10.7V256zM352 32v62.3l-32-10.7-32 10.7V32h64zm-160 0h64v106.7l64-21.3 64 21.3V32h64v192H192V32zm0 224v62.3l-32-10.7-32 10.7V256h64zm-160 0h64v106.7l64-21.3 64 21.3V256h80v224H32V256zm576 224H336V256h80v106.7l64-21.3 64 21.3V256h64v224z"></path>
      </svg>  -->
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path class="primary" d="M320 0v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8V0zm160 288v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8v-88zm-320 0v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8v-88z"></path>
        <path class="secondary" d="M176 224h224a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-80v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8V0h-80a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16zm384 64h-80v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8v-88h-80a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16V304a16 16 0 0 0-16-16zm-320 0h-80v88a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8v-88H16a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16V304a16 16 0 0 0-16-16z"></path>
      </svg>     
      <!-- <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
        <path class="secondary" d="M624 0h-32a16 16 0 0 0-16 16v144H64V16A16 16 0 0 0 48 0H16A16 16 0 0 0 0 16v496h64v-32h512v32h64V16a16 16 0 0 0-16-16zm-48 416H64V224h512z"></path>
        <path class="primary" d="M208 256h-96a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-96a16 16 0 0 0-16-16zM464 0h-96a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16zm-96 256h-96a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16h96a16 16 0 0 0 16-16v-96a16 16 0 0 0-16-16z"></path>
      </svg>                -->
    </div>    
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
