<!DOCTYPE html>
<html>
<head>
	
	<title></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../material-icons/css/materialdesignicons.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/style.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/responsive.css">

	<script type="text/javascript" src="../js/jquery.min.js"></script>

</head>
<body>

    
 
	<div class="page-wrapper chiller-theme toggled">
		<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
			<i class="fa fa-bars"></i>
		</a>
		<nav id="sidebar" class="sidebar-wrapper">
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="#">Admin</a>
					<div id="close-sidebar">
						<i class="fa fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header">
					<div class="user-pic">
						<img class="img-responsive img-rounded" src="../images/user.jpg"
						alt="User picture">
					</div>
					<div class="user-info">
						<span class="user-name">User
							<strong>Name</strong>
						</span>
						<span class="user-role">Administrator</span>
						<span class="user-status">
							<i class="fa fa-circle"></i>
							<span>Online</span>
						</span>
					</div>
				</div>
				<!-- sidebar-header  -->
				<div class="sidebar-menu">
					<ul>
						<li class="header-menu">
							<span>General</span>
						</li>
						<li>
							<a href="index.php">
								<i class="fa fa-home"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="chefs.php">
								<i class="fa fa-users"></i>
								<span>Chefs</span>
							</a>
						</li>
						<li class="header-menu">
							<span>Management</span>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="fa fa-tags"></i>
								<span>Categories</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="categories.php">Manage Categories</a>
									</li>
									<li>
										<a href="addCategory.php">Add Category</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span>Articles</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="articles.php">Manage Articles</a>
									</li>
									<li>
										<a href="addArticle.php">Add Article</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header-menu">
							<span>Other</span>
						</li>
						<li>
							<a href="../" target="_blank">
								<i class="fa fa-play"></i>
								<span>Public Page</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-sign-out"></i>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- sidebar-menu  -->
			</div>
			<!-- sidebar-content  -->
			<div class="sidebar-footer">
				<a href="#">
					<i class="fa fa-bell"></i>
					<span class="badge badge-pill badge-warning notification">3</span>
				</a>
				<a href="#">
					<i class="fa fa-envelope"></i>
					<span class="badge badge-pill badge-success notification">7</span>
				</a>
				<a href="#">
					<i class="fa fa-cog"></i>
					<span class="badge-sonar"></span>
				</a>
				<a href="#">
					<i class="fa fa-power-off"></i>
				</a>
			</div>
		</nav>
		<div class="content-wrapper">
			
