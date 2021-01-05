<?php include 'templates/header.php';?>

<div class="container my-5">
  <h1>Prototype Index</h1>
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
      echo '<a class="list-group-item list-group-item-action" href="pages/'. $file .'">'. $file .'</a>';
    }
  ?>
</div>

<?php include 'templates/footer.php';?>
