<div class="row image-page filiere">
	<div class="titre">
			{{filiere.nom}}
	</div>
</div>
<div class="row" >
	<div class="container">
	<div class="col-md-4">
	<div class="row">
		<p class="label label-danger" style="font-size:16px">
		Formation : {{formations.nom}}
	</p>

	</div>
	<br/>
		<div class="row">
			<div class="list-group">
		  <a href="#/filiere/{{fil.id}}"  ng-repeat="fil in formations.filieres"
		  class="ng-class:{ active: fil.id == filiere.id}; list-group-item" >
		    {{fil.nom}}
		  </a>
		 
		  
		</div>
		</div>

	</div>
	<div class="col-md-8" ng-controller="modalCtrl as modal">
	<p class="label label-default" style="font-size:14px">
		<i class="fa-graduation-cap fa"></i>
		{{formations.type}}
	</p>
		<h1> Filière : {{filiere.nom}} 
			<span ng-show="filiere.accredite" style="font-size:16px" class="pull-right label label-success">
                <i class="fa-check-circle fa"></i> Accréditée
            </span>
		</h1>
		<div class="row">
			<div class="col-md-12 text-justify" >
				<blockquote>
					{{filiere.description}}
				</blockquote>
			</div>
		</div>
		<div class="row">
		<a href="#/filiere-programmes/{{filiere.id}}" class="btn btn-warning btn-xs pull-right"
		
		>Voir le programme de la filière</a>
			<div class="panel arch-panel info">
				<div class="">
					<div class="titre">
						<i class="fa-tag fa"></i>
						Présentation de la filière 
					</div>
				</div>
				<div class="panel-body">
					{{filiere.details.presentation}}
				</div>
			</div>

			<div class="panel arch-panel default">
				<div class="">
					<div class="titre">
						<i class="fa-shield fa"></i>
						Objectif de la filière
					</div>
				</div>
				<div class="panel-body">
					{{filiere.details.objectif}}
				</div>
			</div>

			<div class="panel arch-panel danger">
				<div class="">
					<div class="titre">
						<i class="fa-send fa"></i>
						Les débouchés de la filière
					</div>
				</div>
				<div class="panel-body">
					{{filiere.details.debouches}}
				</div>
			</div>
			<div class="panel arch-panel success">
				<div class="">
					<div class="titre">
						<i class="fa-check-circle-o fa"></i>
						Les conditions d'accès à la filière
					</div>
				</div>
				<div class="panel-body">
					{{filiere.details.acces}}
				</div>
			</div>
			
		</div>
		
	</div>
</div>
</div>