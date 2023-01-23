<?php
include('../../app/view/view.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>NanoTech | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
    <link rel="stylesheet" href="../../public/assets/css/vendor.min.css">
    <link rel="stylesheet" href="../../public/assets/css/default/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../../public/sass/main.css">
	<!-- ================== END core-css ================== -->
</head>
<body>	

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand">NanoTech</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="../../images/user-15.jpg" alt="">
						<span>
                            <span class="d-none d-md-inline">Toufik Shima</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="./logout.php" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
                                <img src="../../images/user-15.jpg" alt="">
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
                                        Toufik Shima
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>

					<div class="navigation-side">
						<ul>
							<!-- <li><a href="./dashboard2.php" class="btn my-1">categories</a></li>
							<li><a href="./dashboard.php" class="btn">posts</a></li> -->
							<li><a href="./categories.php" class="btn my-1">categories</a></li>
							<li><a href="./posts.php" class="btn">posts</a></li>
						</ul>
					</div>
					
					

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-3">
				<div>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0" style="color: #1F4690">
						Hi, Welcome Toufik Shima
					</h1>
					<!-- END page-header -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">CultureDEV Blog || Posts </li>
					</ol>
					
				</div>
				
				<div class="ms-auto">
				<a href="#modal-task" id="addButton" data-bs-toggle="modal" class="btn btn-rounded text-white px-4 rounded-pill" style="background-color: #663DAD"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Post</a>
				<a href="#modal-multiple-task" id="addButton" data-bs-toggle="modal" class="btn btn-rounded text-white px-4 rounded-pill" style="background-color: #663DAD"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Multiple Post</a>
	
			</div>
			</div>

			<div class="container-fluid">
				<section>
					<div class="row">
						<div class="col-12 mt-3 mb-1">
							<h5 class="text-uppercase">Minimal Statistics</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between px-md-1">
								<div class="align-self-center">
									<i class="fa-solid fa-chart-bar text-info fa-3x"></i>
								</div>
								<div class="text-end">
									<h3>
										<?php echo $number_posts?>
									</h3>
									<p class="mb-0">Posts</p>
								</div>
								</div>
							</div>
						   </div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-money-check-dollar text-warning fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											<?php echo $number_categories?>
										</h3>
										<p class="mb-0">Categories</p>
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-money-check-dollar text-warning fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											<?php echo $number_admins?>
										</h3>
										<p class="mb-0">Admins</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			
			<!-- section of Search for posts -->
			<div class="container">
				<div class="row">
					<div class="col-5">
						<form class="d-flex">
								<input class="form-control me-2" type="search" placeholder="Search for post" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
						</form>	
					</div>
				</div>
			</div>
			
			<!-- section of table -->
			<div class="container-fluid my-2 section-table">
				<div class="row">
					<div class="col">
						<div class="shadow-4 rounded-5 overflow-hidden">
							<div class="table-responsive">
								<table class="table align-middle mb-0" style="background-color: #2F3843; border-radius: 1rem;">
									<thead class="text-white-50" style="background-color:  #2F3843; border-radius: 1rem;">
										<tr style="color: #8D949D;">
										<th>Post Title</th>
										<th>Post Category</th>
										<th>Post Content</th>
										<th>Actions</th>
										</tr>
									</thead>
									<tbody>
                                        

                                    

                                    <?php foreach($rows as $row) { ?>
                                        <tr style="color: #fff; border-bottom: black;">
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img
                                                            src="../../images/<?=$row['image']?>"
                                                            alt=""
                                                            style="width: 75px; height: 75px"
                                                            class="rounded-circle bg-white"
                                                        />
                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-1"><?=$row['title']?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fw-normal mb-1 ms-2"><?=$row['category']?></p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success rounded-pill ms-4"><?=$row['content']?></span>
                                                </td>
                                                <td>
                                                    <form method="post" action="">
                                                        <button type="button" id="update-btn" onclick="editTask(<?=$row['id']?>)" class="btn bg-success text-white btn-sm btn-rounded mt-2" data-bs-toggle="modal" data-bs-target="#modal-task">
                                                            <input type="hidden" name="update-id" value="<?=$row['id']?>">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square text-white"></i>
                                                        </button>
                                                        <button type="submit" name="delete" id="buttonDelete" class="d-none">
                                                            <input type="hidden" name="delete-id" value="<?=$row['id']?>">
                                                        </button>
                                                        <button type="submit"  onclick="deletePost(2)" name="delete" class="btn bg-danger text-white btn-sm btn-rounded mt-2 ">
                                                            <input type="hidden" name="delete-id" value="<?=$row['id']?>">
                                                            <i class="fa-solid fa-trash text-white"></i>
                                                        </button>
                                                    </form> 
                                                </td>
                                            </tr>
                                    <?php }?>    

									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Post</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="product-id">
							<div class="mb-3">
								<label class="form-label">Post Title</label>
								<input type="text" name="post-title" class="form-control" id="post-title"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Post Category</label>
								<select class="form-select" name="category-options" id="post-status">
									<option value="">Please select</option>
									<option value="web">Web</option>
									<option value="mobile">Mobile App</option>
									<option value="desktop">Desktop</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Post Image</label>
								<input type="file" name="uploadfile" class="form-control" id="post-image"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Post Content</label>
								<textarea class="form-control" name="post-content" rows="10" id="post-content"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="d-none" id="buttonDelete"></a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="add" class="btn btn-primary task-action-btn" id="task-save-btn">ADD</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modal-multiple-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./multiple-post.php" method="POST" id="form-task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Posts </h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="update-id">
							<div class="mb-3">
								<label class="form-label">Post Numbers you want to add</label>
								<input type="number" name="posts-number" class="form-control" id="posts-number" min="2"/>
							</div>
							
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="add-number-posts" class="btn btn-primary task-action-btn" id="task-save-btn">ADD</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- ================== BEGIN core-js ================== -->
    <script src="../../public/assets/js/vendor.min.js"></script>
    <script src="../../public/assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="../../public/main.js"></script>
	
</body>
</html>
