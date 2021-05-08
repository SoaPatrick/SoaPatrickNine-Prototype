<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Box</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>
  
  <section class="post">
    <div class="post__icon">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z"></path>
      </svg>      
    </div>  
    <header>
      <h1>SoapBox</h1>
    </header>
    <main>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
      <a href="../pages/box_archive__home.php">Storage</a>, <a href="../pages/box_tags__home.php">Tags</a>
    </main>
  </section>
  <?php
    for ($posts = 1; $posts <= 3; $posts++) {
      include '../snippets/blog-post__list.php';
    }
  ?>
  <?php include '../snippets/navigation_box__home.php'; ?>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
