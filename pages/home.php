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
  <section class="post">   
    <header>
      <div class="post__icon post__icon--section">
        <!-- <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path class="primary" d="M392 168.07s0-8-168-8c-152 0-152 8-152 8s-8 0-8 120 8 120 8 120 0 8 152 8c168 0 168-8 168-8s8 0 8-120-8-120-8-120zM173.14 96h165.72l35.64-41.32a32 32 0 1 0-45.3-45.3L256 94.27 182.8 9.48a32 32 0 0 0-45.3 45.29z"></path>
          <path class="secondary" d="M464 96.07H48a48 48 0 0 0-48 48v288a48 48 0 0 0 48 48h16v32h48l21.3-32h245.3l21.3 32h48v-32h16a48 48 0 0 0 48-48v-288a47.86 47.86 0 0 0-47.9-48zm-72 312s0 8-168 8c-152 0-152-8-152-8s-8 0-8-120 8-120 8-120 0-8 152-8c168 0 168 8 168 8s8 0 8 120-8 120-8 120zm72-100a12 12 0 0 1-12 12h-8a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h8a12 12 0 0 1 12 12zm0-64a12 12 0 0 1-12 12h-8a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h8a12 12 0 0 1 12 12z"></path>
        </svg> -->
        <!-- <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path class="primary" d="M101.46,118a37.17,37.17,0,0,1,.33-37.43c9.11-16,28-23.66,45.57-20.12.34-16.64,11.46-32,29-37.43a43.36,43.36,0,0,1,38.82,6.08A41.63,41.63,0,0,1,242.5,2c22.27-6.78,46.23,4.42,53.33,25.54a4.22,4.22,0,0,1,.68,1.92A43.29,43.29,0,0,1,335.65,23c17.53,5.43,28.67,20.79,29,37.43C382.2,57,401.09,64.6,410.2,80.6a37.88,37.88,0,0,1,.33,37.43,42.7,42.7,0,0,1,33.09,20.79c3.91,6.75,4.76,14,4.24,21.12H64.13c-.5-7.12.35-14.38,4.27-21.12C75.14,126.67,88,119.31,101.46,118Z"></path>
          <path class="secondary" d="M64,192h81.56l28,256h45.05L197.05,192H315L293.39,448h45l28-256H448L404.09,484.73A32,32,0,0,1,372.44,512H139.56a32,32,0,0,1-31.65-27.25Z"></path>
        </svg> -->
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path class="primary" d="M356 280H156a12 12 0 0 0-12 12v96a12 12 0 0 0 12 12h200a12 12 0 0 0 12-12v-96a12 12 0 0 0-12-12zm0-168H156a12 12 0 0 0-12 12v96a12 12 0 0 0 12 12h200a12 12 0 0 0 12-12v-96a12 12 0 0 0-12-12z"></path>
          <path class="secondary" d="M488 64h-8v20a12 12 0 0 1-12 12h-40a12 12 0 0 1-12-12V64H96v20a12 12 0 0 1-12 12H44a12 12 0 0 1-12-12V64h-8A23.94 23.94 0 0 0 0 88v336a23.94 23.94 0 0 0 24 24h8v-20a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12v20h320v-20a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12v20h8a23.94 23.94 0 0 0 24-24V88a23.94 23.94 0 0 0-24-24zM96 372a12 12 0 0 1-12 12H44a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H44a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12H44a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm272 208a12 12 0 0 1-12 12H156a12 12 0 0 1-12-12v-96a12 12 0 0 1 12-12h200a12 12 0 0 1 12 12zm0-168a12 12 0 0 1-12 12H156a12 12 0 0 1-12-12v-96a12 12 0 0 1 12-12h200a12 12 0 0 1 12 12zm112 152a12 12 0 0 1-12 12h-40a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12h-40a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm0-96a12 12 0 0 1-12 12h-40a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12z"></path>
        </svg>                   
      </div>       
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
