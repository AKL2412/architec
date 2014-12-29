<div class="container">
	<a href="#/actualites?page={{page}}" class="btn btn-default btn-xs">
		<i class="fa fa-angle-left"></i>
		Tous les articles
	</a>
	<div class="article">
		<h1 class="titre">
			{{actualite.titre}}
		</h1>
		<div class="row">
			<div class="col-md-6 text-justify">
				<blockquote>
			{{actualite.conclusion}}

			</blockquote>
			</div> 
		</div>
		<div class="row">
			<div class="image col-md-8 col-md-offset-2">
			<img ng-src="{{contenu.image}}">
		</div>
		
		</div>
		<div class="texte">
			<h5>Rubrique :{{contenu.rubrique}}  -- {{contenu.texte.length}} paragraphe(s)</h5>
			<p ng-repeat="para in contenu.texte" class="col-md-4 text-justify">
				{{para}}
			</p>
		</div>

	</div>
</div>