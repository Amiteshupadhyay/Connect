<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Connect</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link href="assets/css/new.css" rel="stylesheet" />
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="./assets/css/themify-icons.css" rel="stylesheet">
	
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/css-toggle-switch/latest/toggle-switch.css" />
	<style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 22px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 19px;
  left: 4px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: orange;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
	
</style>	
	
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="./" class="simple-text">
                    Connect
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="settings.php">
                        <i class="ti-ink-pen"></i>
                        <p>Account</p>
                    </a>
                </li>
                <li>
                    <a href="privacy.php">
                        <i class="ti-lock"></i>
                        <p>Privacy Setting</p>
                    </a>
                </li>
                
				
                <li class="active">
                    <a href="notification.php" class="a2am">
                        <i class="ti-filter"></i>
                        <p>Notification Setting</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>
	
	
	 <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Setting</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

		
		
	  <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-user">
                            
                            <div class="content">
                               
								<div class ="edit account info"><h3><small>Notification</small></h3>
                                 <hr>
								
								<div class="porp">
								<div class="first">
									
												<div class="proinfo">
													<div class="col-xs-8 col-sm-8 col-lg-10">
                                          
														<a href="#"data-toggled="tooltip" title="edit"><label>Blog Notifications</label></a>
													</div>
													<div class="col-xs-4 col-sm-4 col-lg-2">
															<label class="switch">
															<input type="checkbox">
															<div class="slider round"></div>
															</label>
													</div>
											
 											
											
														
														<div class="col-xs-8 col-sm-8 col-lg-10">
                                          
														<a href="#" data-toggled="tooltip" title="edit"><label>Debate Notifications</label></a>
														</div>
														<div class="col-xs-4 col-sm-4 col-lg-2">
													<a href="#" data-toggled="tooltip" title="edit">
													

															<label class="switch">
															<input type="checkbox">
															<div class="slider round"></div>
															</label>
													


														</div>
											
													
												
											
											
											
														
														<div class="col-xs-8 col-sm-8 col-lg-10">
                                          
														<a href="#"data-toggled="tooltip" title="edit"><label>Other Notifications</label></a>
													</div>
													<div class="col-xs-4 col-sm-4 col-lg-2">
														<a href="#" data-toggled="tooltip" title="edit"></a>
	                                                    
										             

															<label class="switch">
															<input type="checkbox">
															<div class="slider round"></div>
															</label>

														
														</div>
														
									




												
											
											
											
											
										
							
                                </div>
                            </div>
                           
                           
                       </div>
						</div>
                        
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

		
		
		
</div><!--end of main panel-->
	
	
	
</div><!--end of wrapper-->




</body>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

     <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	
	
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	



</html>

	

		
	