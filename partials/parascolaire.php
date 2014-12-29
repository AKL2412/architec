<!DOCTYPE html>
<html ng-app="architec">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	
	<style type="text/css">
	#wowslider-container1{
		height: 200px;
	}
	</style>
</head>
<body>

<div class="row image-page parascolaire">
<div class="titre">
			Para scolaire
	</div>
<div id="wowslider-container1">
			<div class="ws_images"><ul>
				<li><img src="data1/para/technics-01.jpg" alt=" " title=" " id="wows1_1"/></li>
				<li><img src="data1/para/technics-02.jpg" alt=" " title=" " id="wows1_2"/></li>
				<li><img src="data1/para/technics-03.jpg" alt=" " title=" " id="wows1_3"/></li>
				<li><img src="data1/para/technics-04.jpg" alt=" " title=" " id="wows1_4"/></li>
				</ul></div>
			<div class="ws_shadow"></div>
		</div>
	
</div>

<div class="row" ng-controller="modalCtrl as modal">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<blockquote>
					Les activités parascolaires représentent un atout éducatif majeur pour nos stagiaires. Elles sont des lieux d’apprentissage qui les valorisent sur le plan personnel et qui favorisent leur développement intégral en leur permettant de s’investir dans divers domaines : culturel, artistique et sportif.
				</blockquote>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel-danger panel">
				<div class="panel-heading">
					<img src="css/image/logo-bl-transp-op.png" class="img-circle pull-right" width="70">
					<h1>Sport</h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="circle-body">
							<img src="css/image/iam.png" class="logo" width="70">
							<img src="css/image/sport.jpg">
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<a href="" ng-click="modal.gallery('sport')" class="pull-right btn-link">Voir gallérie</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel-warning panel">
				<div class="panel-heading">
				<img src="css/image/logo-bl-transp-op.png" class="img-circle pull-right" width="70">
					<h1>Visite</h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="circle-body">
						<img src="css/image/iam.png" class="logo" width="70">
							<img src="css/image/visite.jpg">
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<a href="" ng-click="modal.gallery('Visite')" class="pull-right btn-link">Voir gallérie</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel-default panel">
				<div class="panel-heading">

				<img src="css/image/logo-bl-transp-op.png" class="img-circle pull-right" width="70">
					<h1>Séminaire</h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="circle-body">
							<img src="css/image/iam.png" class="logo" width="70">
							<img src="css/image/seminaire.jpg">
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<a href="" ng-click="modal.gallery('Séminaire')" class="pull-right btn-link">Voir gallérie</a>
					</div>
				</div>
			</div>
		</div>
		<p class="text-justify">
		<h1 style="color:#86c53d;text-decoration:underline">Nos Activités | ParaScolaire</h1>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum

		</p>
	</div>
</div>
<div class="a">
	<div class="b">
		<div class="c">
			
		</div>
	</div>
</div>


<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>

