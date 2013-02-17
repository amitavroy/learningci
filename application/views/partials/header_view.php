<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <?php if(isset($header) && isset($header['title'])): ?>
      <title><?php echo $header['title']; ?> | Learning CI with Bootstrap</title>
    <?php else: ?>
      <title>Learning CI with Bootstrap</title>
    <?php endif; ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>