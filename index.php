<?php include 'templates/head.php';?>

<div class="container my-5">
  <h1>Prototype Index</h1>

  <h5 class="mt-5">Pages</h5>
  <?php
    $files = array();
    $dir = opendir('pages/'); // open the cwd..also do an err check.
    while(false != ($file = readdir($dir))) {
      if(($file != ".") and ($file != "..") and ($file != "index.php")) {
        $files[] = $file; // put in array.
      }
    }

    natsort($files); // sort.

    // print.
    foreach($files as $file) {
      $filename = substr(basename($file, '.php'),3);
      echo '<a class="list-group-item list-group-item-action" href="pages/'. $file .'">'. $filename .'</a>';
    }
  ?>

  <h5 class="mt-5">Patterns</h5>
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
      echo '<a class="list-group-item list-group-item-action" href="patterns/'. $file .'">'. $filename .'</a>';
    }
  ?>
</div>

<?php include 'templates/foot.php';?>
