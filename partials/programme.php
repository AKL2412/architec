<div class="row image-page programme">
	<div class="titre">
			Nos Programmes
	</div>
</div>
<div class="container" ng-controller="modalCtrl as modal">

<div class="row nos-formations">
	<div class="col-md-6 col-sm-6 formations formation-initiale">
		<h1>Formation Initiale</h1>
		<div class="col-md-12" ng-repeat="formation in formations">

		 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Formation : {{formation.nom}}</h3>
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge">{{formation.filieres.length}}</div>
                                    <div>Filière(s)</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                        	<div class="uneFiliere" ng-repeat="filiere in formation.filieres">
                        		<a href="#/filiere/{{filiere.id}}" >
                        			<h4>
                        			{{filiere.nom}}
                        			<span ng-show="filiere.accredite" style="font-size:16px" 
                        		class="pull-right label label-success">
                        		<i class="fa-check-circle fa"></i>
                        		</span>
                        			</h4>

                        		</a>

                        		<blockquote>
                        			{{filiere.description | limitTo : 50}} ...
                        		</blockquote>
                        	</div>
                        </div>
                        <a  href="">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
		</div>
		
	</div>
	<div class="col-md-6 col-sm-6 formations formation-continue">
		<h3><u>Centre de formation continue (CFC ARCHITEC)</u></h3>
		<blockquote>
			Le Centre de Formation Continue (CFC) ARCHITEC a pour mission principale de contribuer au développement des compétences  professionnelles en vue d’accompagner les entreprises dans leur évolution. il elabore des formations sur mesure dans les trois disciplines suivantes :
		</blockquote>
		<div class="row">
			<div class="col-md-4">
				<div class="circle-body">
					<img class="zoomable" ng-click="modal.zoomable($event)" src="css/image/coffre-info.jpg">
				</div>
				<h4 class="text-center">
					Infographie
				</h4>
				<a href="" class="btn btn-default btn-xs" 
				ng-click="modal.detailFormation('infographie.php')">
					<i class="fa-eye fa"></i>	voir plus ...
				</a>
			</div>
			<div class="col-md-4">
				<div class="circle-body">
					
						<img class="zoomable" ng-click="modal.zoomable($event)" src="css/image/dessin-bat-cof.jpg">
					
				</div>
				<h4 class="text-center">
					Dessin de batiment
				</h4>
				<a href="" class="btn btn-default btn-xs" ng-click="modal.detailFormation('dessin-bat.php')">
					<i class="fa-eye fa"></i>	voir plus ...
				</a>
			</div>
		</div>

	</div>
</div>
	<!-- {{formations}}
	▼▼▼▼▼▼▼▼▼▼▼▼▼ -->

	<div class="row" id="timeline-planning">
		<div class="timeline">
    <ul class="events">
        <li style="width: 42.48%; left: 57.2%;">Design &amp; Typography <em>(2007 - 2009)</em></li>
        <li style="width: 56.68%; left: 43%;">Photography <em>(2006 - 2009)</em></li>
        <li style="width: 71.3%; left: 28.4%;">Object Oriented Programming <em>(2005 - 2009)</em></li>
        <li style="width: 85.5%; left: 14.2%;">Web Development <em>(2004 - 2009)</em></li>
        <li style="width: 42.75%; left: 0;">3D Modeling and Rendering <em>(2003 - 2006)</em></li>
        <li style="width: 99.5%; left: 0;">Drawing &amp; Illustration <em>(2003 - 2009)</em></li>
    </ul> <!-- end .events -->

    <ul class="intervals">
        <li class="first">2003</li>
        <li>2004</li>
        <li>2005</li>
        <li>2006</li>
        <li>2007</li>
        <li>2008</li>
        <li class="last">2009</li>
    </ul> <!-- end .intervals -->
</div> <!-- end .timeline -->
	</div>
</div>