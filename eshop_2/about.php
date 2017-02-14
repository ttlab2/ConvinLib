<!DOCTYPE html>
<html lang="en">
	<head>
		<title>(School Name) Library Service</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bs/css/bootstrap.min.css" rel="stylesheet">
		<link href="bs/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>

		<link href="css/bootstrap-treeview.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/bootstrap-treeview.min.js"></script>
	</head>

	<body style="padding-top: 30px;">
		<div class="modal fade" id="logonBox" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						<h4 class="modal-title">Sign In</h4>
					</div>
					<div class="modal-body">
						<div>
							<ul class="nav nav-pills">
								<li class="active"><a href="#signin" data-toggle="tab" data-caption="Sign In">Sign In</a></li>
								<li ><a href="#signup" data-toggle="tab" data-caption="Sign Up">Sign Up</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="signin">
									<form style="padding-top: 5px">
										<div class="form-group">
											<input type="text" class="form-control" id="userName" placeholder="User Name">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="password" placeholder="Password">
										</div>
										<button type="button" class="btn btn-success btn-block" id="doLogon">Sign In</button>
									</form>
								</div>
								<div class="tab-pane" id="signup">
									<form style="padding-top: 5px">
										<div class="form-group">
											<input type="text" class="form-control" id="yourName" placeholder="Your Full Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="yourUserName" placeholder="Desired User Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="yourEmail" placeholder="Your Email Id">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="yourPwd" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="confirmPwd" placeholder="Confirm Password">
										</div>
										<button type="button" class="btn btn-success btn-block" id="doLogon">Sign Up</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>	

		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand brand" href="/index.php">(School Name) Library Service</a>
					</div>

					<div class="collapse navbar-collapse" id="the-menu">
						<ul class="nav navbar-nav">
						<!--Icons provided by Glyphicons (included in Bootstrap).-->
							<li><a href="/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
							<li class="active"><a href="/about.php"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;About</a></li>
							<li><a href="/browse.php"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Books List</a></li>
							<li><a href="/search.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Book Search</a></li>
							<li><a href="/contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Contact Us</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Welcome Back<span class="caret"></span></a> 
								<ul class="dropdown-menu">
									<!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;My Cart&nbsp;<span class="badge">4</span></a></li>
									<li class="divider"></li>-->
									<li><a href="#"><span class="glyphicon glyphicon-picture"></span>&nbsp;My Profile</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-gift"></span>&nbsp;Lending History</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Notifications</a></li>
								</ul>				
							</li>
							<li><a href="#" id="logonLink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="page-header"><h1><span class="glyphicon glyphicon-question-sign"></span>&nbsp;About us</h1></div>
			<div id="msg"></div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div id="categoryList"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="panel panel-danger">
						<div class="panel-heading" id="productHead">Fashion shop for Him</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p1.png" class="img-responsive img-thumbnail" title="Product 1" data-toggle="popover" data-placement="right" data-content="Details of Product 1"></dt>
										<dd>Product 1</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p3.png" class="img-responsive img-thumbnail" title="Product 3" id="prod3"></dt>
										<dd>Product 3</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p2.png" class="img-responsive img-thumbnail" alt="Product 2" title="Product 2"></dt>
										<dd>Product 2</dd>
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p2.png" class="img-responsive img-thumbnail" alt="Product 2" title="Product 2"></dt>
										<dd>Product 2</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p1.png" class="img-responsive img-thumbnail" alt="Product 1" title="Product 1"></dt>
										<dd>Product 1</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/p3.png" class="img-responsive img-thumbnail" alt="Product 3" title="Product 3"></dt>
										<dd>Product 3</dd>
									</dl>
								</div>
							</div>
							<div class="dropdown">
								<a class="btn btn-info btn-sm" href="#" data-toggle="dropdown" title="Open items in this shop...">See all&nbsp;<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">See next 20 items</a></li>
									<li><a href="#">See next 100 items</a></li>
									<li class="divider"></li>
									<li><a href="#">Open all items</a></li>
								</ul>				
							</div>  
						</div>
					</div>
				</div>
			</div>
			<div class="row visible-lg-block">
				<div class="col-md-12 col-lg-12">
					<div class="panel panel-success">
						<div class="panel-heading">You recently visited</div>
						<div class="panel-body">
							<div class="alert alert-info">You last visited us on Thursday, 20th March 2015. Please <a href="/contact.php" class="alert-link">let us know</a> in case of any issues or feedback.</div>
							<ul class="list-inline">
								<li><img src="img/p1.png" class="img-thumbnail" alt="Product 1" title="Product 1"></li>
								<li><img src="img/p2.png" class="img-thumbnail" alt="Product 2" title="Product 2"></li>
								<li><img src="img/p3.png" class="img-thumbnail" alt="Product 3" title="Product 3"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<address>
							<strong>(School Name)</strong><br>
							Room 320, Floor 3<br>
							6 Nam Hong Street<br>
							Shau Kei Wan<br>
							Hong Kong<br>
							<abbr title="Phone">P:</abbr> 2666 8601<br>
							<a href="mailto:#">library@strongschool.edu.hk</a>
						</address>					
					</div>
				</div>

				<div class="text-muted pull-left">Modified from <a href="http://www.packtpub.com" target="_blank">Bootstrap&reg; Sample App</a> by Snig Bhaumik (2015)</div>
			</div>
		</div>

		<script>
			$(document).ready(function () {		
				$('[data-toggle="tooltip"]').tooltip();
				$('[data-toggle="popover"]').popover();
				
				$('#prod3').popover({
					html:true,
					placement:'left',
					trigger:'click',
					container:'body',
					content:function(){
						return '<div class="row"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><img src="img/p3.png" class="img-responsive img-thumbnail" alt="Product 3" title="Product 3"><br/>&nbsp;<br/><button type="button" class="btn btn-xs btn-success" onclick="addToCart()">Add to cart</button><br/><button type="button" class="btn btn-xs btn-info">See full details</button></div><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></div>';
					}
				});
			});
			$('#logonLink').on('click', function(e) {
				$('#logonBox').modal({
					keyboard: false,
					backdrop: 'static'
				});
			});
			$('#doLogon').on('click', function(e) {
				alert('Thank you for Signing In');
				$('#logonBox').modal('hide');
			});
			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				var data = $(e.target).data('caption');
				var modal = $('#logonBox');
				modal.find('.modal-title').text(data);
			  
			});
			function addToCart() {
				var txt = '<div id="alertdiv" class="alert alert-warning alert-dismissable"><button class="close" data-dismiss="alert">&times;</button><h4>Apologies</h4>This product could not be added into your cart. Please try again later.</div>';
				$('#msg').php(txt);
				$('#prod3').popover('hide');
			};
			var categories = [
				{
					text: "Fashion and Clothing for Him",
					icon: "glyphicon glyphicon-user",
					state: {
						expanded: true,
						selected: true
					},
					nodes: [
					{
						text: "Shirts",
					},
					{
						text: "Tees"
					},
					{
						text: "Trousers"
					},
					{
						text: "Footwear"
					},
					{
						text: "Accessories"
					}
				]
				},
				{
					text: "Fashion and Clothing for Her",
					icon: "glyphicon glyphicon-heart",
					state: {
						expanded: false,
						selected: false
					},
					nodes: [
					{
						text: "Shirts",
					},
					{
						text: "Tees"
					},
					{
						text: "Skirts"
					},
					{
						text: "Footwear"
					},
					{
						text: "Jewellery"
					},
					{
						text: "Accessories"
					}
				]
				},
				{
					text: "Electronics",
					icon: "glyphicon glyphicon-phone",
					state: {
						expanded: false,
						selected: false
					},
					nodes: [
					{
						text: "Mobiles",
					},
					{
						text: "Tablets"
					},
					{
						text: "LEDs and LCDs"
					},
					{
						text: "Laptops"
					},
					{
						text: "Desktops"
					},
					{
						text: "Cameras"
					},
					{
						text: "Appliances"
					},
					{
						text: "Health Care"
					},
					{
						text: "Accessories"
					}
				]
				}
			];

			$('#categoryList').treeview({
				data: categories,
				onNodeSelected: function(event, data) {
					$('#productHead').text(data.text);
				}
			});

		</script>
	</body>
<html>
