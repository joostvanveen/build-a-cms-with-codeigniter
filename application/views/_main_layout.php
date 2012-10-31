<?php $this->load->view('components/page_head');?>


<body>

<div class="container">
	<section>
		<h1><?php echo anchor('', strtoupper(config_item('site_name'))); ?></h1>
	</section>
	 <div class="navbar">
	 	<div class="navbar-inner">
	 		<div class="container">
<?php echo get_menu($menu); ?>
	 		</div>
	 	</div>
	 </div>
 </div>
 
 <div class="container">
 	<div class="row">
<?php $this->load->view('templates/' . $subview); ?>
 	</div>
 </div>
<?php $this->load->view('components/page_tail');?>