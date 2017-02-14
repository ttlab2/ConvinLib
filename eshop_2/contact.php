<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bs/css/bootstrap.min.css" rel="stylesheet">
		<link href="bs/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
		
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="bs/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/jquery.hotkeys.js"></script>
		<script type="text/javascript" src="js/bootstrap-wysiwyg.js"></script>
		<style>
		#yourComments {
			background-color: white;
			border: 1px solid rgb(204, 204, 204);
			border-collapse: separate;
			border-radius: 3px;
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.075) inset;
			box-sizing: content-box;
			max-height: 25em;
			min-height: 15em;
			outline: medium none;
			overflow: scroll;
			padding: 4px;
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
						<a class="navbar-brand brand" href="/index.php">(School Name) Library Service</a>
					</div>

					<div class="collapse navbar-collapse" id="the-menu">
						<ul class="nav navbar-nav">
						<!--Icons provided by Glyphicons (included in Bootstrap).-->
							<li><a href="/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
							<li><a href="/about.php"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;About</a></li>
							<li><a href="/browse.php"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Books List</a></li>
							<li><a href="/search.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Book Search</a></li>
							<li class="active"><a href="/contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Contact Us</a></li>
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
		
			<div class="page-header"><h1><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Your suggestions are welcome</h1></div>

			<div class="well well-sm">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="yourName" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-user"></span>
								<input type="text" class="form-control" id="yourName" placeholder="Your name please">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="yourEmail" class="col-sm-3 control-label">Email address</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="yourEmail" placeholder="Your Email Id">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="yourComments" class="col-sm-3 control-label">Tell us</label>
						<div class="col-sm-9">
							<div class="btn-toolbar" data-role="editor-toolbar" data-target="#yourComments">
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
									<ul class="dropdown-menu"></ul>
								</div>
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
										<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
										<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
									</ul>
								</div>
								<div class="btn-group">
									<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
									<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
									<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
									<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
								</div>
								<div class="btn-group hidden-xs hidden-sm">
									<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
									<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
									<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
									<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
								</div>
								<div class="btn-group hidden-xs hidden-sm">
									<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
									<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
									<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
									<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
								</div>
								<div class="btn-group hidden-xs hidden-sm">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
									<div class="dropdown-menu input-append">
										<input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
										<button class="btn" type="button">Add</button>
									</div>
									<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>
								</div>
								<div class="btn-group hidden-xs hidden-sm">
									<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
									<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
								</div>
							</div>		
							<div id="yourComments">please tell us what you think about us.</div>								
						</div>
					</div>
					<div class="col-sm-9 col-sm-offset-3">
						<div class="checkbox">
							<label><input type="checkbox">Subscribe Me !!!</label>
						</div>
					</div>
					<div class="clearfix">&nbsp;</div>
					<div class="form-group">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Post It</button>
						</div>
					</div>
				</form>
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
			
			function initEditorToolbar() {
				var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
					'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
				'Times New Roman', 'Verdana'],
				fontTarget = $('[title=Font]').siblings('.dropdown-menu');
				
				$.each(fonts, function (idx, fontName) {
					fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
				});
				$('a[title]').tooltip({container:'body'});
				$('.dropdown-menu input')
					.click(function() {return false;})
					.change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
					.keydown('esc', function () {this.value='';$(this).change();});

				$('[data-role=magic-overlay]').each(function () { 
					var overlay = $(this), target = $(overlay.data('target')); 
					overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
				});
			};

			initEditorToolbar();
			$('#yourComments').wysiwyg();
			$('#yourComments').cleanHtml();
			
		</script>
		
	</body>
<html>
