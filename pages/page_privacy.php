<?php
  $theme = 'black';

  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  
  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Privacy</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>

  <article class="post">
    <div class="post__icon post__icon--section">
      <!-- <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor" d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-43.2c1.5-7.8 2.4-15.8 2.4-24 0-7.2-.9-14.2-2.2-21.1 40.5-9.8 66.2-24.2 66.2-40.2 0-16.5-27-31.2-69.3-41-8.9-33.6-27.4-67.9-41.3-85.4-6.3-8-15.7-12.3-25.3-12.3-9.5 0-12.3 2.4-41.8 17.2-12.8 6.4-24.3 2.1-28.6 0C179.9 2.3 177.3 0 167.9 0c-9.6 0-18.9 4.3-25.2 12.2-13.9 17.5-32.4 51.8-41.3 85.4C59 107.4 32 122.2 32 138.7c0 16.1 25.7 30.5 66.2 40.2-1.3 6.9-2.2 13.9-2.2 21.1 0 8.2.9 16.2 2.4 24H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM128 200c0-2.7.3-5.3.6-7.9 1.3.8 5.1 3.3 5.8 5.4 3.9 11.9 7 24.6 16.5 33.4 8 7.4 47 25.1 64-25 2.8-8.4 15.4-8.4 18.3 0 16 47.4 53.9 34.4 64 25 9.5-8.8 12.7-21.5 16.5-33.4.7-2.1 4.4-4.6 5.8-5.4.3 2.6.6 5.2.6 7.9 0 52.9-43.1 96-96 96S128 252.9 128 200zm-.7-75.5c.7-2.7 12.3-57 40.5-92.5 28.7 14.4 37.7 20.5 56.2 20.5 18.6 0 27.7-6.3 56.2-20.5l.1.1c28.1 35.4 39.7 89.6 40.4 92.4 21.4 4.9 35.8 7.9 51 14.2-24.3 9.9-75.4 21.3-147.7 21.3s-123.4-11.4-147.7-21.3c15.2-6.3 29.9-9.3 51-14.2zM44.8 480c-7.1 0-12.8-5.7-12.8-12.8v-44.8c0-36.5 19.2-69.5 51.4-88.2L108 320l-27.4-64h28.9c4.7 9.6 64.3 108.5 64.3 108.5L142.9 480H44.8zm131.2 0l32-120-21.9-38.4c12.1 3.8 24.6 6.4 37.9 6.4s25.9-2.6 37.9-6.4L240 360l32 120h-96zm240-12.8c0 7.1-5.7 12.8-12.8 12.8h-98.1l-30.8-115.5s59.6-98.9 64.3-108.5h31l-25 65.6 22.5 13.9c30.6 18.9 48.9 51.4 48.9 86.9v44.8z"></path>
      </svg>   -->
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path class="secondary" d="M255.38 421.22L224 480l-31.38-58.78L208 352l-17.79-35.58a161.25 161.25 0 0 0 67.58 0L240 352zM224 288a128 128 0 0 0 128-127.21c-7.49 1.54-15.51 3-24 4.2v6.59c-.11.11-6.07 3.47-6.93 6.28-4.23 12.9-7.59 26.65-17.88 36.19-10.94 10.07-52 24.26-69.33-27.09-3-9.1-16.69-9.1-19.83 0-18.41 54.39-60.66 35.1-69.33 27.09-10.29-9.54-13.76-23.29-17.88-36.19-.86-2.7-6.82-6.17-6.82-6.28V165c-8.48-1.25-16.5-2.66-24-4.2A128 128 0 0 0 224 288z"></path>
        <path class="primary" d="M120 165v6.59c0 .11 6 3.58 6.82 6.28 4.12 12.9 7.59 26.65 17.88 36.19 8.67 8 50.92 27.3 69.33-27.09 3.14-9.1 16.79-9.1 19.83 0 17.33 51.35 58.39 37.16 69.33 27.09 10.29-9.54 13.65-23.29 17.88-36.19.86-2.81 6.82-6.17 6.93-6.28V165c52.95-7.83 88-21.47 88-37 0-13.75-27.51-26-70.6-34.09-9.35-32.11-26.69-64.08-40-80.72a32.1 32.1 0 0 0-39.5-8.8l-27.6 13.8a32 32 0 0 1-28.6 0l-27.6-13.8a32.1 32.1 0 0 0-39.5 8.8c-13.22 16.64-30.6 48.61-40 80.72C59.51 102 32 114.25 32 128c0 15.52 35.05 29.16 88 37zm263.9 143.27l23.9-62.58a16 16 0 0 0-15-21.7h-32.12L224 480 87.32 224h-31a16 16 0 0 0-14.7 22.3l25.74 60.06A133.56 133.56 0 0 0 0 422.4V464a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48v-41.6a133.5 133.5 0 0 0-64.1-114.13z"></path>
      </svg>            
    </div>    
    <div class="post__meta">
      <div>
        <time datetime="2019-10-07T17:22:17+02:00">October 7, 2019</time>
      </div>                
    </div>      
    <header>
      <h1>Privacy Policy</h1>
    </header>
    <main>
      <p>It’s an important topic and I wanted to dedicate a whole page about it and explain how <strong>SoaPatrick.com</strong> deals with this issue.</p>
      <h2 id="automatic-information">Automatic Information</h2>
      <p>You automatically transmit information from your web browser or mobile device. This information may include the name of the website from which you entered this website, if any, as well as the name of the website you’ll visit when you leave this website, your Internet service provider’s name, your web browser type, the type of mobile device, your computer operating system, and data about your browsing activity when using this website. I <strong>DO NOT</strong> use, collect or do anything with this information.</p>
      <h2>Cookies</h2>
      <p>A <strong>cookie</strong> is a small piece of data or a text file that is downloaded to your computer or mobile device when you access certain websites. <strong>Cookies</strong> may contain text that can be read by the web server that delivered the cookie to you. The text contained in the <strong>cookie</strong> generally consists of a sequence of letters and numbers that uniquely identifies your computer or mobile device; it may contain other information as well.</p>
      <p>There are <strong>NO</strong> cookies created on this website (unless you’re logged in, but since no registration is allowed, this only applies to me). </p>
      <h2>Local Storage</h2>
      <p><strong>localStorage</strong>&nbsp;is part of the web storage API, and is a tool to save key/value pairs locally. <strong>localStorage</strong> offers advantages compared to using cookies:</p>
      <ul>
        <li>The data is saved locally only and can’t be read by the server, which eliminates the security issue that cookies present.</li>
        <li>It allows for much more data to be saved (<strong>10Mb</strong>&nbsp;for most browsers).</li>
        <li>It’s simpler to use and the syntax is very straightforward.</li>
      </ul>
      <p>I use <strong>LocalStorage</strong> to save the users Theme Settings. Three values are saved and can be deleted by clearing your cache. </p>
      <ul>
        <li><strong>theme</strong>: light or dark</li>
        <li><strong>color</strong>: amber, red, pink, purple, blue or green</li>
        <li><strong>nav</strong>: left or right</li>
      </ul>
      <p>Unless you change the theme or the navbar position of the website, these values will not be created in your <strong>LocalStorage</strong>.</p>
      <h2>Analytics</h2>
      <p>No analytics, no data tracking, no nothing. Nothing is tracked and analyzed to improve this website. </p>
    </main>
  </article>
</div>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
