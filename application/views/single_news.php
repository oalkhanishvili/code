<div class="container">
	<div class="row">
	<div class="col-md-12">
	
	<a href="javascript:window.history.go(-1);">უკან დაბრუნება&nbsp<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
	<p>
		<h1>სათაური:<?php echo $single_news['title']; ?></h1>
	</p>
	<p><img src="<?php echo base_url('uploads/'.$single_news['image_name']); ?>"></p>
	<p><?php echo htmlentities($single_news['content']); ?></p>
	</div>
	</div>
</div>	
