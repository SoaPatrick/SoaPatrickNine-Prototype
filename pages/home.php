<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  <section class="post">
    <header>
      <h1>SoaPatrick</h1>
    </header>
    <main>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus.</p>
    </main>
  </section>
  <?php
    for ($posts = 1; $posts <= 5; $posts++) {  
      $number = rand(1,3);
      switch ($number) {
        case "1":
          include '../snippets/lab__list.php';
          break;
        case "2":
          include '../snippets/factory__list.php';
          break;
        default:
          include '../snippets/blog-post__list.php';
      }
    }
  ?>  
  <aside class="post">
    <header>
      <h1>Last seen Movies</h1>
    </header>
    <main>    
      <div class="tiles-grid alignwide">
        <div class="rss-item">
          <a href="https://letterboxd.com/soapatrick/film/the-mitchells-vs-the-machines/" target="_blank" rel="noreferrer">
            <div class="rss-item__description"><p><img src="https://a.ltrbxd.com/resized/film-poster/4/3/1/8/8/8/431888-the-mitchells-vs-the-machines-0-500-0-750-crop.jpg?k=fdc12b2a91"></p> <p>Watched on Friday May 7, 2021.</p></div>
          </a>
        </div>
        <div class="rss-item">
          <a href="https://letterboxd.com/soapatrick/film/star-wars-the-last-jedi/2/" target="_blank" rel="noreferrer">
            <div class="rss-item__description"><p><img src="https://a.ltrbxd.com/resized/sm/upload/21/h4/fo/18/47zTsc9gkruDmDssiCqyZTxdOla-0-500-0-750-crop.jpg?k=7799133c26"></p> <p>Watched on Tuesday May 4, 2021.</p></div>
          </a>
        </div>
        <div class="rss-item">
          <a href="https://letterboxd.com/soapatrick/film/voyagers-2021/" target="_blank" rel="noreferrer">
            <div class="rss-item__description"><p><img src="https://a.ltrbxd.com/resized/film-poster/5/2/5/2/5/4/525254-voyagers-0-500-0-750-crop.jpg?k=6072223897"></p> <p>Watched on Saturday May 1, 2021.</p></div>
          </a>
        </div>
        <div class="rss-item">
          <a href="https://letterboxd.com/soapatrick/film/barb-and-star-go-to-vista-del-mar/" target="_blank" rel="noreferrer">
            <div class="rss-item__description"><p><img src="https://a.ltrbxd.com/resized/film-poster/5/2/3/2/2/9/523229-barb-and-star-go-to-vista-del-mar-0-500-0-750-crop.jpg?k=2dba3f85ef"></p> <p>Watched on Saturday May 1, 2021.</p></div>
          </a>
        </div>
      </div>
    </main>
  </section>    
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
