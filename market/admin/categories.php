<?php include('header.php'); ?>

<section class="categories">
	<div class="add-btns">
		<a href="addCategory.php" class="btn btn-success square">+ Add Category</a>
		<a href="addArticle.php" class="btn btn-success square">+ Add Article</a>
	</div>

	<div class="category-inner">
		<div class="category-sidebar">
			<label>Categories List</label>
			<hr>
			<ul>
				<li class="total-list">
					<a href="javascript:;">All Categories <span> 7</span></a>
				</li>
				<div class="dropdown-divider"></div>
				<li>
					<a href="javascript:;" onclick="state(this)">
						<i class="fa fa-circle text-success"></i> Published <span>6</span>
					</a>
				</li>
				<li>
					<a href="javascript:;" onclick="state(this)">
						<i class="fa fa-circle text-muted"></i> Unpublished <span>1</span>
					</a>
				</li>
				<li>
					<a href="javascript:;" onclick="state(this)">
						<i class="fa fa-circle text-danger"></i> Archived<span>0</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="categories-rightbar">
			<h4 id="catname" class="clist-heading">All Categories ( 4 ) </h4>
			<p>Make your content easier to find with categories.</p>
			<div class="categories-list">
				<h5>Published Categories ( 2 ) </h5>
				<div class="catgs">
					<a href="javascript:;" class="cat-name">
						<h6><i class="fa fa-circle text-success"></i> Fruits</h6>
                        <span>11 Articles</span>
                        <span>Created at: 10-18-2019 </span>
					</a>
					<div class="dropdown">
						<button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<i class="fa fa-edit"></i> Edit
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-eye"></i> View
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-trash"></i> Delete
							</a>
						</div>
					</div>
				</div>
				<div class="catgs">
					<a href="javascript:;" class="cat-name">
						<h6><i class="fa fa-circle text-success"></i> Vegetables</h6>
                        <span>11 Articles</span>
                        <span>Created at: 10-18-2019 </span>
					</a>
					<div class="dropdown">
						<button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<i class="fa fa-edit"></i> Edit
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-eye"></i> View
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-trash"></i> Delete
							</a>
						</div>
					</div>
				</div>
				<h5 class="text-muted">Unpublished Categories ( 1 ) </h5>
				<div class="catgs">
					<a href="javascript:;" class="cat-name">
						<h6><i class="fa fa-circle text-muted"></i> Organic</h6>
                        <span>11 Articles</span>
                        <span>Created at: 10-18-2019 </span>
					</a>
					<div class="dropdown">
						<button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<i class="fa fa-edit"></i> Edit
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-eye"></i> View
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-trash"></i> Delete
							</a>
						</div>
					</div>
				</div>
				<h5 class="text-danger">Archived Categories ( 1 ) </h5>
				<div class="catgs">
					<a href="javascript:;" class="cat-name">
						<h6><i class="fa fa-circle text-danger"></i> Local Products</h6>
                        <span>11 Articles</span>
                        <span>Created at: 10-18-2019 </span>
					</a>
					<div class="dropdown">
						<button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<i class="fa fa-edit"></i> Edit
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-eye"></i> View
							</a>
							<a class="dropdown-item" href="#">
								<i class="fa fa-trash"></i> Delete
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include('footer.php'); ?>