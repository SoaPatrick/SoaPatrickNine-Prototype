<?php
  function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
  }
?>


<!doctype html>

<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Prototyping SoaPatrickNine</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <?php if(isLocalhost()): ?>
    <link rel="stylesheet" href="../assets/css/style.css">
  <?php else: ?>
    <link rel="stylesheet" href="../assets/css/style.css<?php echo filemtime('assets/css/style.css') ?>">
  <?php endif; ?>
</head>

<body>
