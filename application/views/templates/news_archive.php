		<!-- Main content -->
 		<div class="span9">
<?php if($pagination): ?>
			<section class="pagination"><?php echo $pagination; ?></section>
<?php endif; ?>
 			<div class="row">
<?php if (count($articles)): foreach ($articles as $article): ?>
 				<article class="span9"><?php echo get_excerpt($article); ?><hr></article>
<?php endforeach; endif; ?>
 			</div>
 		</div>
 		
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h2>Recent news</h2>
<?php $this->load->view('sidebar'); ?>
 		</div>