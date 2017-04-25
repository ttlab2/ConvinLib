<!DOCTYPE html>
<html lang="en">
	<head>
		<title>(School Name) Library Service</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bs/css/bootstrap.min.css" rel="stylesheet">
		<link href="bs/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
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
									<li><a href="/eshop_2/preference.php"><span class="glyphicon glyphicon-picture"></span>&nbsp;Preference & Lending History</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Notifications</a></li>
								</ul>				
							</li>
							<li class="active"><a href="#" id="logonLink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>
		
			<div class="page-header"><h1><span class="glyphicon glyphicon-lock"></span>&nbsp;Please present your credentials to enjoy our service</h1></div>

			<div class="well well-sm">
				<form class="form-horizontal" action="welcomeback.php" method="post">
					<div class="form-group">
						<label for="yourName" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-user"></span>
								<input type="text" class="form-control" id="userName" name="userName" value"" placeholder="Your Username">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="yourEmail" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-asterisk"></span>
								<input type="password" class="form-control" id="password" name="password" value"" placeholder="Your Password">
							</div>
						</div>
					</div>
					<div class="col-sm-9 col-sm-offset-3">
						<div class="checkbox">
							<label><input type="checkbox">Remember me (do not check this unless this is your own computer)</label>
						</div>
					</div>
					<div class="clearfix">&nbsp;</div>
					<div class="form-group">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-check"></span>&nbsp;Sign In</button>
						</div>
					</div>
				</form>
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
