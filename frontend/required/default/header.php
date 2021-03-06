<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto" rel="stylesheet">
	<link href="<?php echo HTTP_FRONTEND; ?>required/stylesheet/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo HTTP_FRONTEND; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo HTTP_FRONTEND; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/tracking.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/popper.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/popper-utils.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/bootstrap.min.js"></script>
	<title><?php echo $site['site-name']; ?></title>
	<script>



		$(document).ready(function () {
			$(".headerButton[title=Logout]").click(function () { //To logout
				$.ajax({
						type: "POST",
						url: "<?php echo HTTP_FRONTEND; ?>destroysession.php"
					})
					.done(function (msg) {
						var string = window.location.href;
							window.location.replace("/");
					});
			});
		});
	</script>
</head>
<body>

	<nav class="fixed-top">
		<a id="title" class="navbar-brand" style="padding: 0; background-image: url(<?php echo IMAGE_DIR . $site['site-image']; ?>);"></a>
		<input type="text" placeholder="Search" id="search"></input>
		<div id="headerRight" class="pull-right d-flex">
			<div class="headerButton">
				<a class="userPhoto" style="background-image: url(<?php echo IMAGE_DIR . $_SESSION['image']; ?>);"></a>
				<a class="headerText"><?php echo $_SESSION['displayname']; ?></a>
			</div>
			<button class="headerButton" data-toggle="tooltip" title="Logout" data-original-title="Logout">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</nav>

	<div class="container mainContent content">