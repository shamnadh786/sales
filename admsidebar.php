<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- font-awesome icons -->
<link href="css/fontawesome-all.min.css" rel="stylesheet">
<!-- //Custom Theme files -->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
<!-- //side nav css file -->
<!--webfonts-->
<!-- logo -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<!-- titles -->
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- body -->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!--//webfonts-->
    <title>Document</title>
</head>
<body>
<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<h1>
					<a href="index.html" class="logo">
						Hai Admin
					</a>
				</h1>
				<ul class="sidebar-menu">
					<li class="treeview active">
					<a href="#">
							<i class="fas fa-plus"></i>
							<span>Staff</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="team.html">
									<i class="fa fa-angle-right"></i>Add Staff</a>
							</li>
							<li>
								<a href="testi.html">
									<i class="fa fa-angle-right"></i>View Staff</a>
							</li>
							

						</ul>
					</li>
					<li class="treeview">
					<a href="#">
							<i class="fas fa-plus"></i>
							<span>Company</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="addcompany.php">
									<i class="fa fa-angle-right"></i>Add Company</a>
							</li>
							<li>
								<a href="testi.html">
									<i class="fa fa-angle-right"></i>Delete Company</a>
							</li>
							

						</ul>
					</li>
					<li class="treeview">
					<a href="#">
							<i class="fas fa-plus"></i>
							<span>purchase View</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="view_additem.php">
									<i class="fa fa-angle-right"></i>View purchased Items </a>
							</li>
							<li>
								<a href="testi.html">
									<i class="fa fa-angle-right"></i>purchase returns</a>
							</li>
							<li>
								<a href="typo.html">
									<i class="fa fa-angle-right"></i>Expenditure on purchase</a>
							</li>

						</ul>
					</li>
					<li class="treeview">
						<a href="portfolio.html">
							<i class="fab fa-buromobelexperte"></i>
							<span>Portfolio</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fas fa-plus"></i>
							<span>Dropdown</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="team.html">
									<i class="fa fa-angle-right"></i>Team</a>
							</li>
							<li>
								<a href="testi.html">
									<i class="fa fa-angle-right"></i>Testimonials</a>
							</li>
							<li>
								<a href="typo.html">
									<i class="fa fa-angle-right"></i>Typography</a>
							</li>

						</ul>
					</li>
					<li class="treeview">
						<a href="contact.html">
							<i class="fas fa-address-book"></i>
							<span>Contact</span>
						</a>
					</li>
					<li class="btn- btn-danger">
						<a href="logout.php">
							<i class="fas fa-address-book"></i>
							<span>Logout</span>
						</a>
					</li>
				</ul>
				
			</aside>
		</div>
	</div>
	<!--left-fixed -navigation-->
	<!-- header-starts -->
	<header class="header-section">
		<div class="header-left  clearfix">
			<!--logo start-->
			<div class="brand">
				<button id="showLeftPush">
					<i class="fas fa-bars"></i>
				</button>
			</div>
			<!--logo end-->
		</div>
		<div class="header-right">
		</div>
	</header>



























































    
    <script src="jss/jquery-2.2.3.min.js"></script>
	<!-- js-->

	<!-- for toggle left push menu script -->
	<script src="jss/classie.js "></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function () {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};


		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->
	<!-- side nav js -->
	<script src="jss/SidebarNav.min.js"></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->
	<!-- script for password match -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- script for password match -->
	<!-- start-smooth-scrolling -->
	<script src="jss/move-top.js "></script>
	<script src="jss/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="jss/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<script src="jss/counter.js"></script>
	<!-- //stats -->
	<!-- Bootstrap Core JavaScript -->
	<script src="jss/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>