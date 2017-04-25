<!DOCTYPE html>
<html lang="en">
	<head>
		<title>(School Name) Library Service</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bs/css/bootstrap.min.css" rel="stylesheet">
		<link href="bs/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>
		
		<style>
			.icon-bar {
				 background-color: red;
			}
			
			.navbar-default .navbar-toggle .icon-bar {
  background-color: yellow;
}
		</style>
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
							<li class="active"><a href="/eshop_2/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
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
							<li><a href="#" id="logonLink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="page-header"><h1><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome to the (School Name) Library Service</h1></div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="panel panel-info">
						<div class="panel-heading">Latest Books Intake</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/Morse_book_cover.jpg" class="img-responsive img-thumbnail" alt="Morse" title="Morse"></dt>
										<dd>Morse</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/Golden_Watlle_Cookery_Book_cover,_6th_ed.jpg" class="img-responsive img-thumbnail" alt="Golden Watlle Cookery Book" title="Golden Watlle Cookery Book"></dt>
										<dd>Golden Watlle Cookery Book</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/128px-Jackie_Robinson_No5_comic_book_cover.jpg" class="img-responsive img-thumbnail" alt="Jackie Robinson" title="Jackie Robinson"></dt>
										<dd>Jackie Robinson</dd>
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/Planet_of_the_Apes_book_cover.jpg" class="img-responsive img-thumbnail" alt="Planet of the Apes" title="Planet of the Apes"></dt>
										<dd>Planet of the Apes</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/Springhaven_by_R_D_Blackmore_-_1887_book_cover.jpg" class="img-responsive img-thumbnail" alt="Springhaven" title="Springhaven"></dt>
										<dd>Springhaven</dd>
									</dl>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<dl>
										<dt><img src="img/Book_Cover/The_Common_Sense_of_Socialism_-_book_cover.jpg" class="img-responsive img-thumbnail" alt="The Common Sense of Socialism" title="The Common Sense of Socialism"></dt>
										<dd>The Common Sense of Socialism</dd>
									</dl>
								</div>
							</div>
							<a class="btn btn-info btn-sm" href="#" role="button">See all recent items...</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="panel panel-warning">
						<div class="panel-heading">Event Notice</div>
						<div class="panel-body">
							<div id="bestSellers" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#bestSellers" data-slide-to="0" class="active"></li>
									<li data-target="#bestSellers" data-slide-to="1"></li>
									<li data-target="#bestSellers" data-slide-to="2"></li>
									<li data-target="#bestSellers" data-slide-to="3"></li>
								</ol>

								<div class="carousel-inner">
									<div class="item active">
										<img src="img/library_1.jpg" alt="News 1">
										<div class="carousel-caption">News 1</div>
									</div>
									<div class="item">
										<img src="img/library_2.jpg" alt="News 2">
										<div class="carousel-caption">News 2</div>
									</div>
									<div class="item">
										<img src="img/library_3.jpg" alt="News 3">
										<div class="carousel-caption">News 3</div>
									</div>
									<div class="item">
										<img src="img/library_4.jpg" alt="News 4">
										<div class="carousel-caption">News 4</div>
									</div>
								</div>

								<a class="left carousel-control" href="#bestSellers" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#bestSellers" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row visible-lg-block">
				<div class="col-md-12 col-lg-12">
					<div class="panel panel-danger">
						<div class="panel-heading">Books need to return</div>
						<div class="panel-body">
							<!--<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>Attendtion Please:</strong><br />Please <!--<a href="/contact.php" class="alert-link">let us know</a>--><!--return or renew the books you borrowed on time to avoid the unnecessary penalty payment.
							</div>-->
							<!--<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>Warning:</strong><br />You <!--<a href="/contact.php" class="alert-link">let us know</a>--><!--now have at least one book already expired. Please return to the library immediately.
							</div>-->
							<!--Friendly Reminder supposed to be more random. As not only one reminder in the system.-->
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>Friendly Reminder:</strong><br />You <!--<a href="/contact.php" class="alert-link">let us know</a>-->can now pre-order books when you got interested.
							</div>
							<!--<ul class="list-inline">
								<li><img src="img/p1.png" class="img-thumbnail" alt="Product 1" title="Product 1"></li>
								<li><img src="img/p2.png" class="img-thumbnail" alt="Product 2" title="Product 2"></li>
								<li><img src="img/p3.png" class="img-thumbnail" alt="Product 3" title="Product 3"></li>
							</ul>-->
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
