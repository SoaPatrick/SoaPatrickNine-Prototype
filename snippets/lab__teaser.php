<article>
  <?php
    $number = rand(1,4);
    $size;
    switch ($number) {
      case "1":
        $size = '800x800';
        break;
      case "2":
        $size = '800x600';
        break;
      case "3":
        $size = '800x500';
        break;
      default:
        $size = '800x300';
    }
  ?>  
  <img src="https://via.placeholder.com/<?php echo $size; ?>?text=Lab+item">
</article>
