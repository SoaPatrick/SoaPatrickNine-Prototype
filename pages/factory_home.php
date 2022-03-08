<?php
  $theme = 'default';
  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
    <span class="breadcrumbs__item breadcrumbs__item--last">Factory</span>
  </nav>
   
  <header>
    <div class="marginal-icon marginal-icon--section">
      <!-- <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M404 384h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm-116-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm-128 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm352-188v272c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h80c13.255 0 24 10.745 24 24v185.167l157.267-78.633C301.052 154.641 320 165.993 320 184v57.167l157.267-78.633C493.052 154.641 512 165.993 512 184zM96 280V64H32v384h448V196.944l-180.422 90.211C294.268 289.81 288 285.949 288 280v-83.056l-180.422 90.211C102.269 289.811 96 285.947 96 280z"></path>
      </svg>   -->
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path class="secondary" d="M512 184v272a24 24 0 0 1-24 24H136a24 24 0 0 0 24-24V252.31l139.12-88.53A24 24 0 0 1 336 184v68.28l139.12-88.53A24 24 0 0 1 512 184z"></path>
        <path class="primary" d="M136 480H24a24 24 0 0 1-24-24V56a24 24 0 0 1 24-24h112a24 24 0 0 1 24 24v400a24 24 0 0 1-24 24z"></path>
      </svg>                        
    </div>       
    <h1>SoapFactory</h1>
  </header>
  <div class="site__content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
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
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
