<?php
session_start();
require "../config/database.php";
require "../models/db.php";
require "../models/products.php"; 
require "../models/manufactures.php"; 
require "../models/protype.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="public/css/uniform.css" />
	<link rel="stylesheet" href="public/css/select2.css" />
	<link rel="stylesheet" href="public/css/matrix-style.css" />
	<link rel="stylesheet" href="public/css/matrix-media.css" />
	<link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		ul.pagination{
			list-style: none;
			float: right;
		}
		ul.pagination li.active{
			font-weight: bold
		}
		ul.pagination li{
		  float: left;
		  display: inline-block;
		  padding: 10px
		}
	</style>
</head>
<body>
	<?php 
	if(isset($_SESSION['isLogedin']) && $_SESSION['isLogedin'] == true) {
		?>
			<!--Header-part-->
			<div id="header">
				<h1><a href="dashboard.html">Dashboard</a></h1>
			</div>
			<!--close-Header-part-->

			<!--top-Header-menu-->
			<div id="user-nav" class="navbar navbar-inverse">
				<ul class="nav">
					<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
							<li class="divider"></li>
							<li><a href="../login/logout.php"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
							<li class="divider"></li>
							<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
							<li class="divider"></li>
							<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
							<li class="divider"></li>
							<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
						</ul>
					</li>
					<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
					<li class=""><a title="" href="../login/logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
				</ul>
			</div>

			<!--start-top-serch-->
			<div id="search">
				<form action="result.html" method="get">
				<input type="text" placeholder="Search here..." name="key"/>
				<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
			</form>
			</div>
			<!--close-top-serch-->

			<!--sidebar-menu-->

			<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
			<ul>
			<li><a href="indexAdmin.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
		<li> <a href="formAddPro.php"><i class="icon icon-th-list"></i> <span>Add New Product</span></a></li>
		<li> <a href="manufactures.php"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>
		<li> <a href="formAddManufactures.php"><i class="icon icon-th-list"></i> <span>Add New Manufactures</span></a></li>
		<li> <a href="protype.php"><i class="icon icon-th-list"></i> <span>Protype</span></a></li>
		<li> <a href="formAddProtype.php"><i class="icon icon-th-list"></i> <span>Add New Protype</span></a></li>
				</ul>
			</div>
			<!-- BEGIN CONTENT -->
			<div id="content">
				<div id="content-header">
					<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
					<h1>Manage Products</h1>
				</div>
				<div class="container-fluid">
					<hr>
					<div class="row-fluid">
						<div class="span12">
							<div class="widget-box">
								<div class="widget-title"> <span class="icon"><a href="formAddPro.php"> <i class="icon-plus"></i> </a></span>
									<h5>Products</h5>
								</div>
								<div class="widget-content nopadding">
									<table class="table table-bordered table-striped">
										<thead>
										<tr>
											<th></th>
											<th>Name</th>
											<th>Category</th>
											<th>Producer</th>
											<th>Description</th>
											<th>Price (VND)</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php
										$products = new Products;
										$getAlltable = $products->getAlltable();      
										$totalRow = count($products->getAllProducts());
										$perpage = 7;
										if(isset($_GET['page']))
										{
											$page = $_GET['page'];
										}
										else{
											$page = 1;
										}
										$gettableProducts = $products->gettableProducts($page, $perpage);     
										foreach($gettableProducts as $value)
										{ ?> <tr class=""> 
														
												<td><?php echo "<img src='../images/".$value['image']."'>" ?></td>  
												<td><?php echo $value['name'] ?></td>      
												<td><?php echo $value['type_name'] ?></td>   
												<td><?php echo $value['manu_name'] ?></td>      
												<td><?php echo $value['description'] ?></td>  
												<td><?php echo $value['price'] ?></td>                                                               
											<td>
												<a href="formUpdates.php?id=<?php echo $value['id']; ?>" class="btn btn-success btn-mini">Edit</a>
												<a href="delProducts.php?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-mini">Delete</a>
												</td>
											</tr>   
									<?php  }  ?>                           							
									</tbody>
									</table>
									<ul class="pagination">
										<div class="row">
											<?php
											$paginationAdmin = $products->paginationAdmin($totalRow, $perpage); ?>
											<li><?php echo $paginationAdmin."<br>";?></li>
										</div>				
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTENT -->
			<!--Footer-part-->
			<div class="row-fluid">
				<div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
			</div>
		<!--end-Footer-part-->
	<?php }
	else{
		header("location: login.php");
	} ?>
<script src="public/js/jquery.min.js"></script>
<script src="public/js/jquery.ui.custom.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.uniform.js"></script>
<script src="public/js/select2.min.js"></script>
<script src="public/js/jquery.dataTables.min.js"></script>
<script src="public/js/matrix.js"></script>
<script src="public/js/matrix.tables.js"></script>
</body>
</html>

