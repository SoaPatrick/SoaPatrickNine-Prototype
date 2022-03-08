<?php
  $theme = 'red';

  include '../templates/head.php';
  include '../templates/header.php';
?>

<main class="global-main site">

  <nav aria-label="breadcrumb" class="breadcrumbs">
    <span class="breadcrumbs__item"><a href="home.php">Home</a></span>
    <span class="breadcrumbs__item breadcrumbs__item--last">Patrick</span>
  </nav>

  <article class="post">
    <div class="marginal-icon marginal-icon--section">
      <!-- <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M501.5 66.6l-71.7-26.1 9.5-23.2c1.7-4.1-.2-8.8-4.3-10.5L420.2.6c-4.1-1.7-8.8.2-10.5 4.3l-10 24.7L321.1 1c-8.9-3.2-18 2.7-20.5 9.6L264.1 111c-3 8.3 1.2 17.5 9.6 20.5l73.6 26.8-22.5 55.4c-3.7-1.8-7.3-3.9-11.5-4.8L253.6 197l-10.1-16.1c-11.9-19-28.8-33.5-48.4-42.5 12.8-13 20.7-30.8 20.7-50.4 0-39.7-32.3-72-72-72S72 48.3 72 88c0 20.8 9 39.4 23.1 52.6-22.8 11.3-41.9 29.7-53.8 53.5L5 266.5c-11.8 23.7-2.2 52.6 21.5 64.4.7.3 26.5 14.1 51-5L49.1 453.6c-5.7 25.8 10.6 51.5 36.4 57.3 3.6.8 7 1.1 10.4 1.1 22.3 0 42-15.8 46.8-37.6l17.2-77.5 15.9 19.9V464c0 26.5 21.5 48 48 48s48-21.5 48-48v-52.8c0-18.1-6.2-35.8-17.5-50l-46.5-58.1v-20.3c6.3 3.2 13.1 5.5 20.1 6.9l60.8 12.2-.3.8c-1.7 4.1.2 8.8 4.3 10.5l14.8 6.2c4.1 1.7 8.8-.2 10.5-4.3l6.7-16.6c13-6.4 23.1-18.1 26.2-33.1 1.8-8.8.9-17.8-2.1-26l28.6-70.2 76.6 27.9c8.9 3.3 18-2.8 20.5-9.6L511 87.1c3.1-8.3-1.2-17.4-9.5-20.5zM143.9 48c22.1 0 40 17.9 40 40s-17.9 40-40 40-40-17.9-40-40 17.9-40 40-40zm157.2 223.7h-.4l-66.4-13.3c-12.9-2.6-24.3-10.5-31.3-21.6-14.6-23.3-16.3-28-27.1-35.6v113.2l53.5 66.9c6.8 8.5 10.5 19.1 10.5 30V464c0 8.8-7.2 16-16 16s-16-7.2-16-16v-52.8c0-3.6-1.2-7.2-3.5-10L152.2 336h-11.5l-29.2 131.5c-1.7 7.7-9.6 14.2-19.1 12.2-8.6-1.9-14.1-10.5-12.2-19.1l31.6-142.3V206c-5.3 4.7-10.1 10-13.4 16.7l-36.2 72.5c-3.1 6.2-12.1 11.9-21.5 7.2-7.9-4-11.1-13.6-7.2-21.5l36.2-72.5c14.9-29.8 44.9-48.4 78.2-48.4 28 0 53.5 14.2 68.3 37.9l13.7 21.9c2.3 3.7 6.1 6.3 10.4 7.2l66.4 13.3c2.2.4 4.2 1.3 5.9 2.5l-11.5 28.9zm148.8-110.1l-150.3-54.7 25.6-70.4 150.3 54.7-25.6 70.4z"></path>
      </svg>  -->
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path class="primary" d="M144 0a48 48 0 1 0 48 48 48.08 48.08 0 0 0-48-48zm357.5 66.6L321.08 1a16 16 0 0 0-20.5 9.6l-43.8 120.3a16 16 0 0 0 9.6 20.5l180.5 65.6a16 16 0 0 0 20.5-9.6L511 87.1a15.93 15.93 0 0 0-9.52-20.5z"></path>
        <path class="secondary" d="M321 212l-47.8-16-49.3-49.3a63.47 63.47 0 0 0-45.2-18.8h-62.9a63.63 63.63 0 0 0-57.2 35.4L3.38 273.7a32 32 0 1 0 57.2 28.6L80 263.6v54.8L64.08 476.8a32 32 0 0 0 28.6 35c1.1.1 2.2.2 3.2.2a32.05 32.05 0 0 0 31.8-28.8l13.2-131.2h15.3L192 423.5V480a32 32 0 0 0 64 0v-56.5a64.27 64.27 0 0 0-6.7-28.6l-41.2-82.5v-91.2l20 20a65 65 0 0 0 25 15.5l46.1 15.4-11.2 30.8a16 16 0 0 0 9.6 20.5l15 5.5a16 16 0 0 0 20.5-9.6l46.19-126.87L334 176zM429.68 6.5l-15-5.5a16 16 0 0 0-20.5 9.6l-5.49 15 45.1 16.4 5.49-15a16 16 0 0 0-9.6-20.5z"></path>
      </svg>                    
    </div>       
    <div class="post__meta">
      <div>
        <time datetime="2019-10-07T17:22:17+02:00">October 7, 2019</time>
      </div>                
    </div>    
    <header>
      <h1>Patrick</h1>
    </header>
    <div class="post__content">
      <figure class="wp-block-image alignwide">
        <img loading="lazy" src="https://via.placeholder.com/1500x1000" alt="Me looking skeptical" width="1500" height="1000">
        <figcaption>early design idea for SoaPatrickEight</figcaption>
      </figure>     
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus. Cras aliquet, massa et tincidunt consectetur, justo tellus sodales augue, ac mattis purus lectus nec massa. Aliquam sagittis eleifend pretium. Duis eleifend, est sed semper scelerisque, odio mauris gravida sapien, non convallis dui metus ut risus. Suspendisse a nisl sem. Aenean id pellentesque purus. Quisque pharetra est purus, ut volutpat leo dignissim sed. Maecenas eu sapien imperdiet, scelerisque metus vel, faucibus libero. Praesent nec elementum libero. Mauris dolor tellus, lacinia ut elementum at, volutpat id justo. Nunc bibendum varius quam nec egestas. Sed tempus, felis quis commodo ullamcorper, ligula enim consectetur elit, in pharetra mi ex quis magna.</p>
      <p>Aenean vitae lacus quis libero pretium laoreet vel nec lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce volutpat consectetur sodales. Sed sagittis risus et lectus suscipit ultrices. Quisque molestie imperdiet libero, sed tincidunt mi. Aenean hendrerit lacinia lectus quis congue. Maecenas pretium neque libero, quis tristique libero imperdiet vel. Donec vel purus tristique felis euismod tincidunt.</p>
      <p>Nullam sit amet rhoncus justo, venenatis ullamcorper felis. Suspendisse felis enim, scelerisque ut pulvinar eget, viverra a mi. Vestibulum faucibus tempor venenatis. Vivamus nisl orci, rutrum id gravida ac, pharetra ac purus. Nunc tellus leo, gravida non eleifend vitae, egestas vel sem. Cras id ligula sapien. Quisque nec volutpat felis. Duis imperdiet nisl at libero tempus cursus. Aliquam ullamcorper tortor ac velit dictum, sit amet ultricies nisl hendrerit. Maecenas semper, justo quis tempus euismod, tortor risus iaculis arcu, sit amet laoreet neque orci ultricies diam. Nunc aliquet vel quam quis lacinia. Maecenas rhoncus eleifend mi a finibus. Vestibulum sed nunc sit amet nulla tincidunt lacinia nec vitae nunc. Sed congue sit amet metus ac iaculis. Aenean molestie convallis justo tristique finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique sapien a sem ornare sollicitudin. Vivamus interdum non sem eget dignissim. Nulla sit amet euismod metus. Suspendisse eleifend ultricies orci, tempor pretium ante placerat non. Nullam scelerisque felis eu tortor consectetur tincidunt. Curabitur sagittis eu est non convallis.</p>
      <p>Nullam efficitur ut tellus id porta. Proin porta, mauris nec pulvinar scelerisque, arcu ipsum ullamcorper augue, quis iaculis nisl ante a orci. Duis mauris nulla, sodales vel eros ut, lacinia tristique tellus. Mauris non finibus metus. Nulla imperdiet fermentum nisl, a scelerisque leo convallis vel. Vestibulum laoreet felis eget sagittis sagittis. Aliquam erat volutpat. Praesent semper ipsum feugiat tortor venenatis, nec pulvinar est viverra. Ut vel nisi dapibus, mollis velit quis, rhoncus urna. In vestibulum lacus mauris, id ullamcorper augue pretium ut. Nunc ac nunc orci. Pellentesque volutpat dictum sem non congue. Integer consequat pharetra tincidunt.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, magna nec venenatis mollis, lacus nisi fringilla neque, id porta nisi lorem in risus. Phasellus sit amet accumsan augue, ut rhoncus purus. Cras aliquet, massa et tincidunt consectetur, justo tellus sodales augue, ac mattis purus lectus nec massa. Aliquam sagittis eleifend pretium. Duis eleifend, est sed semper scelerisque, odio mauris gravida sapien, non convallis dui metus ut risus. Suspendisse a nisl sem. Aenean id pellentesque purus. Quisque pharetra est purus, ut volutpat leo dignissim sed. Maecenas eu sapien imperdiet, scelerisque metus vel, faucibus libero. Praesent nec elementum libero. Mauris dolor tellus, lacinia ut elementum at, volutpat id justo. Nunc bibendum varius quam nec egestas. Sed tempus, felis quis commodo ullamcorper, ligula enim consectetur elit, in pharetra mi ex quis magna.</p>
      <p>Aenean vitae lacus quis libero pretium laoreet vel nec lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce volutpat consectetur sodales. Sed sagittis risus et lectus suscipit ultrices. Quisque molestie imperdiet libero, sed tincidunt mi. Aenean hendrerit lacinia lectus quis congue. Maecenas pretium neque libero, quis tristique libero imperdiet vel. Donec vel purus tristique felis euismod tincidunt.</p>
    </div>
  </article>
</main>

<?php
  include '../templates/footer.php';
  include '../templates/foot.php';
?>
