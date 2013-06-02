<head>
<meta charset="utf-8">
<?php if(isset($page_title)): ?>
<title><?php echo $page_title; ?></title>
<?php else: ?>
<title>Bootstrap, from Twitter</title>
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<?php $this->carabiner->display('default','css'); ?>

<?php $this->carabiner->display('default','js'); ?>
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
</style>


<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
</head>