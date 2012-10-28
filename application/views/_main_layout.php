<?php $this->load->view('components/page_head');?>


<body>

<div class="container">
	<section>
		<h1><?php echo config_item('site_name'); ?></h1>
	</section>
	 <div class="navbar">
	 	<div class="navbar-inner">
	 		<div class="container">
	 			<ul class="nav">
	 				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Link<b class="caret"></b></a>
	 					<ul class="dropdown-menu">
	 						<li><a href="#">Link</a></li>
	 						<li><a href="#">Link</a></li>
	 					</ul>
	 				</li>
	 				<li><a href="#">Link</a></li>
	 				<li><a href="#">Link</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
 </div>
 
 <div class="container">
 	<div class="row">
 		<!-- Main content -->
 		<div class="span9">
 			<h2>Main content</h2>
 		</div>
 		
 		<!-- Sidebar -->
 		<div class="span3">
 			<h2>Recent news</h2>
 		</div>
 	</div>
 </div>
<?php $this->load->view('components/page_tail');?>