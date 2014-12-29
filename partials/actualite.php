<div class="container actualite">

<div class="row-">
	<div class="form-group">
		<label>
		Ordonner par id : 
		<select ng-model="ngDate" class="form-control">
			<option selected="selected" value="-id" title="(les plus récentes d'abord)">Decroissant </option>
			<option value="+id" title="(les plus vieilles d'abord)">croissant </option>
		</select>
	</label>
	</div>
</div>
	<div class="row">
		<div class="container">
			<div class="col-md-3 " ng-repeat="actua in articles | orderBy : ngDate">
		<div class="actua">
		<strong>Article #000{{actua.id+1}}</strong>
			<h4 class="text-center">
			{{actua.titre}}

			</h4>
			
			<p class="text-justify">
				{{actua.conclusion | limitTo: 65 }} ..
			</p>
			
			<em class="pull-right">{{actua.date|date:'dd-MM-yyyy HH:m:s'}} </em>
			<p>
				<a href="#/actualite/{{actua.id}}?page={{pagination.current}}" class="btn btn-default btn-xs"> lire la suite...</a>
			</p>
		</div>
	</div>
		</div>
	</div>
	<div class="row">
		<div class="mypagination">
		<nav>
		  <ul class="pagination">
		    <li ng-class="{disabled:pagination.table[0] == 0}">
		    <a href="" ng-show="pagination.table[0] == 0">
		    <span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>
		    </a>
		    <a ng-if="pagination.table[0] != 0" href="#/actualites?page={{pagination.table[0]-1}}" >
		    <span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>
		    </a> 
		    </li>
		    
		   	 <li ng-repeat="p in pagination.table" ng-class="{active:p==pagination.current}">
		   	 	<a href="#/actualites?page={{p}}">{{p+1}}
		   	 	<span >
		   	 		
		   	 	</span>
		   	 	</a>
		   	 </li>

		    <li ng-class="{disabled:pagination.table[pagination.table.length-1] == pagination.last}">
			    
			    <a ng-if="pagination.table[pagination.table.length-1] == pagination.last" 
			    href="" >
		    		<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a>
		    	</a>
			    <a ng-if="pagination.table[pagination.table.length-1] < pagination.last"
			     href="#/actualites?page={{pagination.table[pagination.table.length-1]+1}}" >
		    		<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a>
		    	</a> 
		    </li>
		  </ul>
		</nav>
		</div>
	</div>
</div>
