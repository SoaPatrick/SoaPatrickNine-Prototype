<?php 
  $theme = 'default';
  include 'templates/head.php';
?>

<div class="wrapper">
  <h1>Prototype Index</h1>

  <h5>Pages</h5>
  <ul>
    <li>
      <a href="pages/home.php">Home</a>
    </li>
  </ul>

  <h5 class="mt-5">Patterns</h5>
  <ul>
  <?php
    $files = array();
    $dir = opendir('patterns/'); // open the cwd..also do an err check.
    while(false != ($file = readdir($dir))) {
      if(($file != ".") and ($file != "..") and ($file != "index.php")) {
        $files[] = $file; // put in array.
      }
    }

    natsort($files); // sort.

    // print.
    foreach($files as $file) {
      $filename = substr(basename($file, '.php'),3);
      echo '<li><a href="patterns/'. $file .'">'. $filename .'</a></li>';
    }
  ?>
  </ul>
</div>

<?php include 'templates/foot.php';?>
