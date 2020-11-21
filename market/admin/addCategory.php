<?php include('header.php'); ?>

<section class="add-article">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
		<li class="breadcrumb-item active">Add Category</li>
	</ul>
	<div class="article-inner">
		<div class="article-leftbar">
			<div class="form-group styled-form">
				<div class="article-title" onclick="showTitle(this)">
					<span id="title">Title</span>
					<i class="fa fa-pencil"></i>
				</div>
				<label class="d-none" id="titleText">Title</label>
				<input type="text" class="form-control" name="" id="titleInput" required="" onfocusout="hideInp()">
			</div>
			<div class="form-group styled-form">
				<label id="slugText">Slug</label>
				<input type="text" class="form-control" name="" id="slugInput">
			</div>
			<div class="form-group styled-form">
				<label>Description</label>
				<textarea class="form-control" name="" rows="10"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-success square" type="submit" name="">
					<i class="fa fa-save"></i> Save
				</button>
			</div>
		</div>
		<div class="article-sidebar"></div>
	</div>
</section>

<?php include('footer.php'); ?>