<div class="row image-page filiere">
	<div class="titre">
			Le programme de la filière 
			<a href="#/filiere/{{filiere.id}}">
				<span class="badge">{{filiere.nom}}</span>
			</a>
	</div>
</div>
<div class="container">
<div class="row" ng-show="programme == null">
	<p class="label label-danger">
		<i class="fa-times fa"></i>
		Programme introuvable
	</p>
	<a href="#/filiere/{{filiere.id}}">
				Retour
	</a>
</div>

<div class="col-md-8 col-md-offset-2">
 <div class="myTimeline">
			<ul class='timeline' ng-repeat="niv in programme.niveaux">
			  <li class="year niveau">
			  	{{niv.id}}e année 
			  	
			  </li> 
			  <div class="block" ng-repeat="sem in niv.semestres">
			  	<li class="year first" >
			  	Semestre {{sem.id}}
			  	</li>
			  	<li class="event" ng-repeat="mat in sem.matieres">
			    	<h1><a href="#">{{mat.matiere.nom}}</a></h1>
			    	<tt>Code : {{mat.matiere.code}}</tt> | 
			    	<tt>Volume horaire : {{mat.horaire}}</tt>
			  	</li>
			  
			  </div>
			</ul>

		</div> 
</div>
</div>