<?php include('header.php'); ?>

<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<section class="add-article">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="articles.php">Manage Articles</a></li>
		<li class="breadcrumb-item active">Add Article</li>
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
				<textarea name="text" id="text" rows="18"></textarea>
                <script>
                    CKEDITOR.replace('text');
                </script>
			</div>
			<div class="form-group">
				<button class="btn btn-success square" type="submit" name="">
					<i class="fa fa-save"></i> Save
				</button>
			</div>
		</div>
		<div class="article-sidebar">
			<div class="article-save">
				<button class="btn btn-success square btn-lg btn-block" type="submit" name="">
					<i class="fa fa-save"></i> Update
				</button>
			</div>
			<div class="form-group">
				<label class="custom-check features">Publish
					<input type="checkbox" name="">
					<span class="checkmark"></span>
				</label>
			</div>
			<div class="form-group">
				<label>Category</label>
				<p>Add category to the article</p>

				<select class="form-control" name="category">
					<option selected disabled hidden>No Category Selected</option>
					<option selected="" value="1">Category 1</option>
					<option value="2">Category 2</option>
					<option value="3">Category 3</option>
					<option value="4">Category 4</option>
					<option value="5">Category 5</option>
				</select>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>