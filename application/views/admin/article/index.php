<section>
	<h2>News articles</h2>
	<?php echo anchor('admin/article/edit', '<i class="icon-plus"></i> Add an article'); ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Pubdate</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($articles)): foreach($articles as $article): ?>	
		<tr>
			<td><?php echo anchor('admin/article/edit/' . $article->id, $article->title); ?></td>
			<td><?php echo $article->pubdate; ?></td>
			<td><?php echo btn_edit('admin/article/edit/' . $article->id); ?></td>
			<td><?php echo btn_delete('admin/article/delete/' . $article->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any articles.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>