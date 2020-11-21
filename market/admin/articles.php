<?php include('header.php'); ?>

<section class="categories">
	<div class="add-btns">
		<a href="addCategory.php" class="btn btn-success square">+ Add Category</a>
		<a href="addArticle.php" class="btn btn-success square">+ Add Article</a>
	</div>

	<div class="category-inner">
		<div class="category-sidebar">
			<label>Articles List</label>
			<hr>
			<ul>
				<li class="total-list">
					<a href="javascript:;">All Articles <span> 7</span></a>
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
			<h4 id="catname" class="clist-heading">All Articles ( 4 ) </h4>
			<div class="articles-list">
				<div class="articles-table">
					<h5>Published Categories ( 2 ) </h5>
					<table class="table">
						<thead>
							<tr>
								<th>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</th>
								<th>Article Title</th>
								<th>Creation Date</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody id="checkpub">
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-success"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-success"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
						</tbody>
					</table>
					<h5 class="text-muted">Unpublished Categories ( 1 ) </h5>
					<table class="table">
						<thead>
							<tr>
								<th>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</th>
								<th>Article Title</th>
								<th>Creation Date</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody id="checkpub">
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-muted"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-muted"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
						</tbody>
					</table>
					<h5 class="text-danger">Archived Categories ( 1 ) </h5>
					<table class="table">
						<thead>
							<tr>
								<th>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</th>
								<th>Article Title</th>
								<th>Creation Date</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody id="checkpub">
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-danger"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
							<tr>
								<td>
									<label class="custom-check">
                                        <input type="checkbox" id="selectAll">
                                        <span class="checkmark"></span>
                                    </label>
								</td>
								<td>
									<a href="javascript:;"><i class="fa fa-circle text-danger"></i> Lorem ipsum dolor sit amet, consectetur adipiscing.</a>
									<p>helpful: 1 / unhelpful: 1</p>
								</td>
								<td>11-08-2019 20:29 PM </td>
								<td class="text-right">
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
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include('footer.php'); ?>