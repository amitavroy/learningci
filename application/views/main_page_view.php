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

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

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