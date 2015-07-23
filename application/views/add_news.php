<div class="container">
	<div class="row">
	<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
 <?php echo validation_errors(); ?>
 <?php echo $error; ?>
</div>
	
	<div class="col-md-12">
	<form action="<?php echo site_url('news/create'); ?>" method="post" enctype="multipart/form-data">
		<p>
			სათაური
		</p>
		<input type="text" class="form-control" placeholder="Text input" name="title">
		<p>
			ტექსტი
		</p>
		<textarea class="form-control" rows="3" name="content"></textarea>
		<p>
			<input type="file" name="userfile"/>
		</p>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
	</div>
	</div>
</div>