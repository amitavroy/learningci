    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <?php foreach ($scripts as $filename => $folder): ?>
    	<script type="text/javascript" src="<?php echo base_url() . 'js/' . $folder . '/' . $filename; ?>"></script>
  	<?php endforeach; ?>

  </body>
</html>