<!DOCTYPE html>
<html ng-app="architec">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Image carousel" />
	<title>INSTITUT ARCHITEC DE MARRAKECH</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"> 
	 <link href="css/app.css" rel="stylesheet" type="text/css" media="all"> 
	 <link href="css/myTimeline.css" rel="stylesheet" type="text/css" media="all"> 
	 <link href="css/timeline.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 

	<link href="css/aTimeLineHistorique.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="css/timeline-planning.css" rel="stylesheet" type="text/css" media="all"> 
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
</head>
<body>
	<div id="page-top">
		<div class="row">
				<div class="container">
					<nav class="navbar  navbar-default-" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#/home">
				      	<img src="css/image/iam.png" width="80">
				      	<span>
				      	INSTITUT ARCHITEC DE MARRAKECH 
				      	</span>
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <div class="row">
				      	<div class="col-md-3 col-sm-4 col-md-offset-3" ng-controller="formseachCtrl as sct">
				             <form novalidate method="get" action="#/search" class="form" role="form" >
				              <div class="input-group ">
				              <input ng-model="searchInput" type="text" class="form-control " placeholder="Search...">
				                <span class="input-group-btn">
				                <input type="submit" class="btn btn-default" value="search"/>
				                </span>
				              </div>
				            </form>
				  		</div>
				      </div>
				      <ul class="nav navbar-nav navbar-right les-liens" 
				      >
				     	 <li  class="top-link home">
				     	 <a href="#/home">Home</a>
				     	 </li>
				        <li  class="top-link programme"><a href="#/programmes">Programmes</a></li>
				        <li  class="top-link"><a href="#">Formation</a></li>
				        <li  class="top-link parascolaire"><a href="#/parascolaire">Parascolaire</a></li>
				        <li  class="top-link contact"><a href="#/contact">Contact</a></li>
				        <li  class="top-link blog hidden-xs a-propos">
				        <a >A Propos</a>
				        <div class="contenu">
				        	<div class="row">

					        	<div class="container" ng-include="'partials/apropos-modale.php'">
					        		<div style="text-align:center;color:#fff">
					        			Chargement du contenu...
					        		</div>
					        	</div>
					        </div>
				        </div>
				        
				        </li>
				        <li  class="top-link blog visible-xs a-propos">
				        <a href="#/a-propos">A Propos</a>
				        </li>
				        <li class="dropdown">
				          <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Architec <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#/actualites">Actualités</a></li>
				            <li><a href="#">Evénements</a></li>
				            <li class="divider"></li>
				            <li><a href="#">
				            	<i class="fa-user fa"></i>
				            	Se connecter
				            </a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				</div>
		</div>
	</div>
	<!-- <div class="row">
	
		<div class="block-message">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				<i class="fa-graduation-cap fa"></i>
				</p>
			</div>
			<div id="banniere">
				
			</div>

			<div class="container">

			<a href="#" class="btn btn-primary btn-ld">Manger</a>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
				
			</div>
	</div> -->
	<!-- ===================== main content ================================ -->
	<div class="row principal-row" ng-view>
		
	</div>
	<!-- ============================ footer ========================== -->
	<div ng-include="'partials/footer.php'"></div>

	<!-- ================= JS Including ====================================== -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/angular/angular.js"></script>
	<script type="text/javascript" src="js/angular/angular-route.js"></script>

	<script type="text/javascript" src="js/my-angular-file/myapp.js"></script>
	<script type="text/javascript" src="js/my-angular-file/directives.js"></script>
	<script type="text/javascript" src="js/my-angular-file/services.js"></script>
	<script type="text/javascript" src="js/my-angular-file/controllers.js"></script>



</body>
</html>