<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset.css'); ?>">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
	<title>Oto's Blog</title>
</head>
<body>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url(''); ?>">Oto's Blog</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('news/search'); ?>" method="post"> 
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="ძებნა">
        </div>
        <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('news/create'); ?>">სიახლის დამატება</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
