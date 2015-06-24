<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pageTitle; ?></title>
	<script type="text/javascript">
	jQuery(document).ready(function($){
	$("#contactform").validate({
		rules:{
			fname:{
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: false,
				minlength: 3
			}
		},
		messages:{
			fname:{
				required: "Please enter your name",
				minlength: "Your name seems a bot short, doesn't it?"
			},
			email:{
				required: "Please enter your email address",
				email: "Please enter a valid email address"
			}
		}
	});
});
	</script>
</head>

<body>	
	<div class="black-header">
		<div class="main-menu navbar navbar-inverse" role="navigation">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<div class="nav navbar-nav navbar-left">
		      		<a href="index.php"><img src="images/logo.png" style="width:120px; margin-top:5px;"></a>
		      	</div>
		      	<div class="collapse navbar-collapse" id="collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">HOME</a></li>
						<li><a href="vehicles.php">VEHICLES</a></li>
						<li><a href="yacht.php">YACHT</a></li>
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<div class = "content-o">	