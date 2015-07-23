
<div class="container">
	<div class="row">	
		<?php foreach ($results as $n_list) : ?>
			<div class="col-md-12">
				<p>
					<h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span>
					<?php echo $n_list['title']; ?></h1>
				</p>
				<p>
					<img src="<?php echo base_url('uploads/'.$n_list['image_name']); ?>" height="350">
				</p>
			
				<p>
					<a href="<?php echo site_url('news/show/'.$n_list['id']); ?>">
					<button class="btn btn-success">
					<span class="glyphicon glyphicon-share-alt" aria-hidden="true">&nbsp</span>
					სიახლის სრულად ნახვა</button>
					</a>
				</p>
			</div>
		<?php endforeach; ?>	
	</div>
<nav>
<?php echo $links;?>
</nav>
</div>
