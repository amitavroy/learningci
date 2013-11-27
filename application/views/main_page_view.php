<!DOCTYPE html>
<html lang="en">

  <?php
  // checking for the header array and the data inside
  if (isset($header) && is_array($header)) {
    $this->load->view('partials/header', $header);
  }
  else {
    $this->load->view('partials/header');
  }
  ?>

  <body>

    <?php $this->load->view('partials/menu'); ?>

    <div class="container" id="content-container">

      <div class="message-container"><?php echo get_message(); ?></div>

      <?php
      if (isset($content['view_name']) && is_array($content['view_data'])) {
        $this->load->view($content['view_name'], $content['view_data']);
      }
      ?>

      <?php $this->load->view('partials/footer'); ?>

    </div> <!-- /container -->
    <?php $this->carabiner->display('js'); ?>

  </body>
</html>