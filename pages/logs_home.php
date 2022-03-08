<?php
  $theme = 'default';
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
    <span class="breadcrumbs__item breadcrumbs__item--last">Log</span>
  </nav>

  <section class="post">
    <header>
      <div class="marginal-icon marginal-icon--section">
        <!-- <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M434.9 410.7L288 218.6V32h26c3.3 0 6-2.7 6-6V6c0-3.3-2.7-6-6-6H134c-3.3 0-6 2.7-6 6v20c0 3.3 2.7 6 6 6h26v186.6L13.1 410.7C-18.6 452.2 11 512 63.1 512h321.8c52.2 0 81.7-59.8 50-101.3zm-50 69.3H63.1c-25.7 0-40.3-29.4-24.6-49.8l150.2-196.5c2.1-2.8 3.3-6.2 3.3-9.7V32h64v192c0 3.5 1.2 6.9 3.3 9.7l150.2 196.5c15.6 20.4 1.2 49.8-24.6 49.8z"></path>
        </svg> -->
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
          <path class="secondary" d="M328 220.33V224c0 32-6.69 47.26-20 63.8-28.2 35-76 39.5-118.2 43.4-25.7 2.4-49.9 4.6-66.1 12.8-3.82 1.94-9.25 6.44-13.44 13.94A80.16 80.16 0 0 0 56 355.67V156.33a80.31 80.31 0 0 0 48 0v144c23.9-11.5 53.1-14.3 81.3-16.9 35.9-3.3 69.8-6.5 85.2-25.7 6.34-7.83 9.5-17.7 9.5-33.7v-3.67a80.31 80.31 0 0 0 48 0z"></path>
          <path class="primary" d="M80 0a80 80 0 1 0 80 80A80 80 0 0 0 80 0zm0 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm0 256a80 80 0 1 0 80 80 80 80 0 0 0-80-80zm0 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zM304 64a80 80 0 1 0 80 80 80 80 0 0 0-80-80zm0 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
        </svg>           
      </div>          
      <h1>Logs</h1>
    </header>
    <div class="site__content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
    </div>
  </section>
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
