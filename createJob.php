<?php

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>TimeLapse - M152</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

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
                <li class="active">
                    <a href="createJob.php">
                        <i class="ti-plus"></i>
                        <p>Create Job</p>
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

                    <div class="col-md-6">
                        <div class="card">

                            <?php
                                if (array_key_exists("progress", $_SESSION)) {
                                        if ($_SESSION["progress"]) {
                                            ?>
                                            <form onsubmit="confirm('The current job will be cancelled and a time lapse will be created with the current data!')" method="post" action="./requestHandler.php">
                                                <div class="card-header">
                                                    <h4 class="card-title">
                                                        Job in Progress...
                                                    </h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="form-group">
                                                        <progress></progress>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="cancel">
                                                        <button type="submit" class="btn btn-fill btn-danger">Cancel Job</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                        }
                                        else {
                                            ?>
                                            <form method="post" action="./requestHandler.php">
                                                <div class="card-header">
                                                    <h4 class="card-title">
                                                        Create Job
                                                    </h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input id="name" name="name" type="text" placeholder="Name of the Job" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Interval</label>
                                                        <input id="interval" name="interval" type="number" placeholder="Interval (in seconds)" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Duration</label>
                                                        <input id="duration" name="duration" type="number" class="form-control" placeholder="Duration"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Output Framerate</label>
                                                        <input id="fps" name="fps" type="number" placeholder="FPS" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-fill btn-info">Start Job</button>
                                                </div>
                                            </form>
                                            <?php

                                        }
                                }
                            ?>


                        </div> <!-- end card -->
                    </div> <!--  end col-md-6  -->

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
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , Damian Zehnder & Colin Herzog</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/es6-promise-auto.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/bootstrap-selectpicker.js"></script>
<script src="js/bootstrap-switch-tags.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/chartist.min.js"></script>
<script src="js/bootstrap-notify.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/jquery-jvectormap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="js/jquery.bootstrap.wizard.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery.datatables.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/paper-dashboard.js"></script>
<script src="js/demo.js"></script>
</body>
</html>
