<?php 
if (isset($header) && is_array($header)) {
	$this->load->view('partials/header_view', $header);
} else {
	$this->load->view('partials/header_view');
}
?>

<?php $this->load->view('partials/menu_view'); ?>

<div class="container">

  <h1>Bootstrap starter template</h1>
  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

</div> <!-- /container -->

<?php 
if (isset($footer) && is_array($footer)) {
	$this->load->view('partials/footer_view', $footer);
} else {
	$this->load->view('partials/footer_view');
}
?>