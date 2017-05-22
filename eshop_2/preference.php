<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Preference</title>
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
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="signin">
									<form style="padding-top: 5px" action="welcomeback.php" method="post">
										<div class="form-group">
											<input type="text" class="form-control" id="userName" name="userName" placeholder="User Name">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
										</div>
										<button type="button" class="btn btn-success btn-block" id="doLogon">Sign In</button>
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
						<a class="navbar-brand brand" href="/eshop_2/index.php">(School Name) Library Service</a>
					</div>

					<div class="collapse navbar-collapse" id="the-menu">
						<ul class="nav navbar-nav">
						<!--Icons provided by Glyphicons (included in Bootstrap).-->
							<li><a href="/eshop_2/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
							<li><a href="/eshop_2/about.php"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;About</a></li>
							<li class="dropdown">
								<a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span>&nbsp;Books<span class="caret"></a>
								<ul class="dropdown-menu">
									<li><a href="/eshop_2/browse.php"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Books List</a></li>
									<li><a href="/eshop_2/search.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Book Search</a></li>
								</ul>	
							</li>
							<li><a href="/eshop_2/contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Contact Us</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Welcome Back<span class="caret"></span></a> 
								<ul class="dropdown-menu">
									<li class="active"><a href="/eshop_2/preference.php"><span class="glyphicon glyphicon-picture"></span>&nbsp;Preference & Lending History</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Notifications</a></li>
								</ul>				
							</li>
							<li><a href="#" id="logonLink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="page-header"><h1><span class="glyphicon glyphicon-wrench"></span>&nbsp;User Preference</h1></div>
			<div id="msg"></div>
			
			<div class="well well-sm">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#userInfo" aria-controls="userInfo" role="tab" data-toggle="tab">User Information</a></li>
				<li role="presentation"><a href="#modifyPassword" aria-controls="modifyPassword" role="tab" data-toggle="tab">Change Password</a></li>
				<li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reports</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="userInfo">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="uInfo">
						<!--For you to generate something from PHP script-->
					</div>
				</div>
			
				<div role="tabpanel" class="tab-pane" id="modifyPassword">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="passwd" class="col-sm-3 control-label">Current Password</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-asterisk"></span>
									<input type="password" class="form-control" name="curPasswd" id="curPasswd" placeholder="Enter the current password you used" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="passwd" class="col-sm-3 control-label">New Password</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-asterisk"></span>
									<input type="password" class="form-control" name="newPasswd" id="newPasswd" placeholder="Enter the new password" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirmPW" class="col-sm-3 control-label">Confirm New Password</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-ok"></span>
									<input type="password" class="form-control" name="confirmPW" id="confirmPW" placeholder="Enter the new password which entered above" value="">
								</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok"></span>&nbsp;Update</button>
								<button type="reset" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-repeat"></span>&nbsp;Reset</button>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="reports">
					<div class="col-sm-12">
						<h2>Coming Soon</h2>
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

		</script>
	</body>
<html>
