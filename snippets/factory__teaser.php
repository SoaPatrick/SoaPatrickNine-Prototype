<?php
  $number = rand(1,2);
  $size;
  switch ($number) {
    case "1":
      $size = '640x640';
      $class = 'large';
      break;
    default:
      $size = '640x640';
      $class = 'default';
  }
?>  

<article class="<?php echo $class; ?>">
  <a href="../pages/factory_single.php" class="img-link"><img src="https://via.placeholder.com/<?php echo $size; ?>?text=Factory+Item"></a>
</article>
