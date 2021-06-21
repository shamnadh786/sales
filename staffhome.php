<?php
session_start();
include("salesdb.php");
?>





<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Exchange Education a Education category Flat Bootstrap Responsive Website Template | :: W3layouts</title>

<!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Exchange Education a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom Theme files -->
    <!-- Bootstrap Styling --> <link rel='stylesheet' href="css/bootstrap.css" type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <script src="js/jquery.min.js"></script>
    <!-- Bootstrap-Working-File --> <script src="js/bootstrap.min.js"></script>
    <!-- Index-Page-Styling --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />   
	<!-- Owl-Carousel-Styling --> <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<!-- //Custom Theme files -->

<!-- Smooth-Scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<!-- //Smooth-Scrolling -->

<!-- Calender-JavaScript -->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
<!-- //Calender-JavaScript -->

</head>

<!-- Body-Starts-Here -->
<body>

	<!-- Header-Starts-Here -->
	<div class="header">

		<!-- Navbar-Starts-Here -->
	    <nav class="navbar navbar-inverse">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>

	                <!-- Logo --><a class="navbar-brand" href="#">Welcome <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} ?></a><!-- //Logo -->

	            </div>
	            
	            <!-- Navbar-Collapse -->
	            <div id="navbar" class="navbar-collapse collapse">

	                <ul class="nav navbar-nav navbar-right">

		                <li><a href="staffhome.php" >Home</a></li>
		                <li><a href="staffprofile.php">Profile</a></li>
                        <li><a href="staffviewstock.php">View Stock</a></li>

		                <!-- Dropdown -->
		                <li role="presentation" class="dropdown carat1">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sales<span class="caret"></span> </a>
				                <ul class="dropdown-menu dropdown1">
					    			<li><a href="salesentry.php" >Sales Entry</a></li>
		                			<li><a href="staffsaleview.php" >Sales History</a></li>
									<li><a href="staffsalereturn.php" >Sales Return View </a></li>
					               
					               
				                </ul>
		                </li>

                        <li role="presentation" class="dropdown carat2">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Purchase<span class="caret"></span> </a>
				                <ul class="dropdown-menu dropdown2">
					    			<li><a href="pr_entry.php" >Purchase Entry</a></li>
		                			<li><a href="staffpurchasehist.php" >Purchase History</a></li>
					               
				                </ul>
		                </li>


						<li role="presentation" class="dropdown carat1">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bill<span class="caret"></span> </a>
				                <ul class="dropdown-menu dropdown1">
					    			<li><a href="billentry.php" >Bill Entry</a></li>
									<li><a href="searchbill.php" >Bill Search</a></li>
		                			<li><a href="billhist.php" >Bill History</a></li>
					               
					               
				                </ul>
		                </li>
		                <!-- //Dropdown -->

					   

		               
		                <!-- Signup-Button -->
		                <li>
			                <div class="login-pop">
				                <div id="loginpop">
					                <a href="logout.php"><span>Logout</span></a>
					                
				                </div>
			                </div>
					        
		                </li>
		                <!-- //Signup-Button -->

	                </ul>
	            </div>
	            <!-- //Navbar-Collapse -->

	        </div>
	    </nav>
	    <!-- //Navbar-Ends-Here -->

		<!-- Carousel-Starts-Here -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="images/0.jpg" alt="First Slide">
				</div>

				<div class="item">
					<img class="second-slide" src="images/img55.jpg" alt="Second Slide">
				</div>

				

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- //Carousel-Ends-Here -->

	</div>
	<!-- Header-Ends-Here -->

  

	        <div class="copyright">
	            <p>&copy; 2016 Exchange Education. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
	        </div>

        </div>

        <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                */            
                $().UItoTop({ easingType: 'easeOutQuart' });            
            });
        </script>
        
        <!-- //Slide-To-Top JavaScript -->

    </div>
    <!-- //Footer-Ends-Here -->

    <script>
/*$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
   
});
});
</script>

</body>
<!-- Body-Ends-Here -->

</html>