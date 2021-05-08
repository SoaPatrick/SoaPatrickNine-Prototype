<?php
  include '../templates/head.php';
  include '../templates/header.php';
?>

<div class="main">
  
  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item breadcrumbs__item--last">Privacy</span>
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
  </nav>

  <article class="post">
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
