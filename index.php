<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="css/paper-dashboard.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="css/themify-icons.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="#" class="simple-text logo-mini">
					M152
				</a>

				<a href="#" class="simple-text logo-normal">
                    TimeLapse
				</a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="createJob.php">
	                        <i class="ti-plus"></i>
	                        <p>Create Job</p>
	                    </a>
	                </li>
                    <li>
                        <a href="currentJob.php">
                            <i class="ti-reload"></i>
                            <p>Current Job</p>
                        </a>
                    </li>
                    <li>
                        <a href="archive.php">
                            <i class="ti-archive"></i>
                            <p>Archive</p>
                        </a>
                    </li>

	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
	        <nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand" href="#charts">TimeLapse</a>
	                </div>
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">

						<!-- your content here -->

	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="https://sites.google.com/a/gibmit.ch/modul-152-hs2017-q2/">
	                                Modulwebsite
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <div class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script>, Damian Zehnder & Colin Herzog</a>
	                </div>
	            </div>
	        </footer>
	    </div>
	</div>
</body>

	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Forms Validations Plugin -->
	<script src="js/jquery.validate.min.js"></script>

	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="js/es6-promise-auto.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="js/moment.min.js"></script>

	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="js/bootstrap-datetimepicker.js"></script>

	<!--  Select Picker Plugin -->
	<script src="js/bootstrap-selectpicker.js"></script>

	<!--  Switch and Tags Input Plugins -->
	<script src="js/bootstrap-switch-tags.js"></script>

	<!-- Circle Percentage-chart -->
	<script src="js/jquery.easypiechart.min.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="js/bootstrap-notify.js"></script>

	<!-- Sweet Alert 2 plugin -->
	<script src="js/sweetalert2.js"></script>

	<!-- Vector Map plugin -->
	<script src="js/jquery-jvectormap.js"></script>

	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Wizard Plugin    -->
	<script src="js/jquery.bootstrap.wizard.min.js"></script>

	<!--  Bootstrap Table Plugin    -->
	<script src="js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="js/jquery.datatables.js"></script>

	<!--  Full Calendar Plugin    -->
	<script src="js/fullcalendar.min.js"></script>

	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

	<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

</html>
