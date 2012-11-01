		<!-- Main content -->
 		<div class="span9">
			<article>
				<h2><?php echo e($article->title); ?></h2>
				<p class="pubdate"><?php echo e($article->pubdate); ?></p>
				<?php echo $article->body; ?> 
			</article>
 		</div>
 		
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h2>Recent news</h2>
<?php $this->load->view('sidebar'); ?>
 		</div>