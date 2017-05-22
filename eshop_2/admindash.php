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
									<li><a href="/eshop_2/preference.php"><span class="glyphicon glyphicon-picture"></span>&nbsp;Preference & Lending History</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Notifications</a></li>
								</ul>				
							</li>
							<li><a href="#" id="logonLink"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="page-header"><h1><span class="glyphicon glyphicon-wrench"></span>&nbsp;Administrator Dashboard</h1></div>
			<div id="msg"></div>
			
			<div class="well well-sm">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#createNewBooks" aria-controls="createNewBooks" role="tab" data-toggle="tab">New Books</a></li>
				<li role="presentation"><a href="#createNewUsers" aria-controls="createNewUsers" role="tab" data-toggle="tab">New Users</a></li>
				<li role="presentation"><a href="#deleteUsers" aria-controls="deleteUsers" role="tab" data-toggle="tab">Remove Users</a></li>
				<li role="presentation"><a href="#deleteBooks" aria-controls="deleteBooks" role="tab" data-toggle="tab">Cancel Books Registeration</a></li>
				<li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reports</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="createNewBooks">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="cover" class="col-sm-3 control-label">Book Cover</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-book"></span>
									<input type="file" class="form-control" name="cover" id="cover" accept="image/*" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="bookID" class="col-sm-3 control-label">Book ID</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-qrcode"></span>
									<input type="number" class="form-control" name="bookID" id="bookID" placeholder="Enter the Book ID (numbers only)" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-book"></span>
									<input type="text" class="form-control" name="title" id="title" placeholder="Enter the keywords on the title" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="isbn" class="col-sm-3 control-label">ISBN</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-book"></span>
									<input type="text" class="form-control" name="isbn" id="isbn" placeholder="Enter the ISBN (either ISBN-10 or ISBN-13)" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="author" class="col-sm-3 control-label">Author</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-user"></span>
									<input type="text" class="form-control" name="author" id="author" placeholder="Who write this book" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="publisher" class="col-sm-3 control-label">Publisher</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-briefcase"></span>
									<input type="text" class="form-control" name="publish" id="publisher" placeholder="Which company publish this book" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="year" class="col-sm-3 control-label">Year of Publishing</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-calendar"></span>
									<input type="text" class="form-control" name="year" id="year" placeholder="Which year publish this book" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="lendingtype" class="col-sm-3 control-label">Material type</label>
							<div class="col-sm-9">
								<div class="radio">
									<label class="radio-inline"><input type="radio" name="optlendingtype" value="LEN">Lending</label>
									<label class="radio-inline"><input type="radio" name="optlendingtype" value="REF">Reference</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="classification" class="col-sm-3 control-label">Material classifications (more than one classifications can be selected):</label>
							<div class="col-sm-9">
								<select multiple class="form-control" size="20" name="selectclass" id="optclassification">
									<!--All followed with LoC Scheme (simplified)-->
									<!--Class A Group-->
									<option value="A">Class A - General Works</option>
									<option value="AE">Class AE - Encyclopedias</option>
									<option value="AY">Class AY - Yearbooks, Almanacs</option>
									<!--Class B Group-->
									<option value="B">Class B - Philosophy</option>
									<option value="BF">Class BF - Phychology</option>
									<option value="BJ">Class BJ - Ethics, Conduct of life</option>
									<!--Class C Group-->
									<option value="C">Class C - Auxiliary Sciences of History</option>
									<option value="CT">Class CT - Biography</option>
									<!--Class D to F Group-->
									<option value="D">Class D to F - History</option>
									<!--Class G Group-->
									<option value="G">Class G - Geography</option>
									<option value="G">Class G - Tourism</option>
									<option value="GV">Class GV - Recreation, Sports, Games</option>
									<!--Class H Group-->
									<option value="H">Class H - Social Sciences</option>
									<option value="HA">Class HA - Statistics</option>
									<option value="HB">Class HB - Economic Theory</option>
									<option value="HD">Class HD - Management, Supply Chain Management</option>
									<option value="HE">Class HE - Transportation and Communication</option>
									<option value="HF">Class HF - Accounting, Commerce, Marketing, Customer Services</option>
									<option value="HG">Class HG - Finance, Banking, Insurance</option>
									<option value="HJ">Class HJ - Public Finance, Taxation</option>
									<!--Class J Group-->
									<option value="J">Class J - Politics and Government</option>
									<!--Class K Group-->
									<option value="K">Class K - Law</option>
									<option value="KNQ">Class KNQ - China Law</option>
									<!--Class L Group-->
									<option value="L">Class L - Education</option>
									<!--Class M Group-->
									<option value="M">Class M - Music</option>
									<!--Class N Group-->
									<option value="N">Class N - Visual Arts</option>
									<option value="NC">Class NC - Drawing, Design, Illustration</option>
									<option value="NK">Class NK - Decorative Arts, Applied Arts</option>
									<!--Class P Group-->
									<option value="P">Class P - Language and Literature</option>
									<option value="PE">Class PE - English Language</option>
									<option value="PL">Class PL - Chinese Language & Literature</option>
									<option value="PN">Class PN - Motion Pictures, TV Programs, Movies</option>
									<!--Class Q Group-->
									<option value="Q">Class Q - Science</option>
									<option value="QA">Class QA - Mathematics, Computer Science</option>
									<option value="QC">Class QC - Physics</option>
									<option value="QD">Class QD - Chemistry</option>
									<option value="QE">Class QE - Geology</option>
									<option value="QH">Class QH - Biology, Ecology</option>
									<option value="QR">Class QR - Microbiology</option>
									<!--Class R Group-->
									<option value="R">Class R - Medicine</option>
									<option value="RA">Class RA - Beauty, Fitness, Health</option>
									<option value="RS">Class RS - Pharmary, Chinese Medicine</option>
									<!--Class S Group-->
									<option value="S">Class S - Agricluture</option>
									<option value="SB">Class SB - Plant Culture, Gardening</option>
									<option value="SF">Class SF - Animal Culture</option>
									<!--Class T Group-->
									<option value="T">Class T - General Technology</option>
									<option value="TA">Class TA - Engineering, Civil Engineering</option>
									<option value="TC">Class TC - Hydraulic Engineering</option>
									<option value="TD">Class TD - Environmental Technology, Sanitary Engineering</option>
									<option value="TJ">Class TJ - Mechanicial Engineering & Machinery</option>
									<option value="TK">Class TK - Electrical Engineering, Electronics, Nuclear Engineering</option>
									<option value="TP">Class TP - Chemical Technology</option>
									<option value="TR">Class TR - 3-D Modeling, Photography</option>
									<option value="TS">Class TS - Manufactures</option>
									<option value="TX">Class TX - Hotel & Catering</option>
									<!--Class U Group-->
									<option value="U">Class U - Military Science</option>
									<!--Class V Group-->
									<option value="V">Class V - Naval Science</option>
									<!--Class Z Group-->
									<option value="Z">Class Z - Bibliography and Library Science</option>
								
								</select>
							</div>
						</div>
					
						<div class="clearfix">&nbsp;</div>
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok"></span>&nbsp;Create</button>
								<button type="reset" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-repeat"></span>&nbsp;Reset</button>
							</div>
						</div>
					</form>
				</div>
			
				<div role="tabpanel" class="tab-pane" id="createNewUsers">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="userIcon" class="col-sm-3 control-label">User Icon</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-user"></span>
									<input type="file" class="form-control" name="userIcon" id="userIcon" accept="image/*" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="user_ID" class="col-sm-3 control-label">User ID</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-qrcode"></span>
									<input type="text" class="form-control" name="user_ID" id="user_ID" placeholder="Enter the User ID" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="uName" class="col-sm-3 control-label">User Shown Name</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-user"></span>
									<input type="text" class="form-control" name="uName" id="uName" placeholder="Enter the User Name" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="passwd" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-asterisk"></span>
									<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Enter the password" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirmPW" class="col-sm-3 control-label">Confirm Password</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-ok"></span>
									<input type="password" class="form-control" name="confirmPW" id="confirmPW" placeholder="Enter the password which entered above" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="userRight" class="col-sm-3 control-label">User Right</label>
							<div class="col-sm-9">
								<div class="radio">
									<label class="radio-inline"><input type="radio" name="optlendingtype" value="ADM" disabled>Administrator</label>
									<label class="radio-inline"><input type="radio" name="optlendingtype" value="LIB">Librarian</label>
									<label class="radio-inline"><input type="radio" name="optlendingtype" value="USE">Standard User</label>
								</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok"></span>&nbsp;Create</button>
								<button type="reset" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-repeat"></span>&nbsp;Reset</button>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="deleteUsers">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="user_ID" class="col-sm-3 control-label">User ID</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-qrcode"></span>
									<input type="text" class="form-control" name="user_ID" id="user_ID" placeholder="Enter the User ID" value="">
								</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>
								<button type="reset" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-repeat"></span>&nbsp;Reset</button>
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="deleteBooks">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="bookID" class="col-sm-3 control-label">Book ID</label>
							<div class="col-sm-9">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-qrcode"></span>
									<input type="number" class="form-control" name="bookID" id="bookID" placeholder="Enter the Book ID (numbers only)" value="">
								</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="form-group">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>
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
