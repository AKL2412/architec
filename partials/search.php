<div class="container" ng-controller="formseachCtrl as ct">
	<div class="row" >
	    <div class="col-md-8 col-md-offset-2">
	    <form class="form " role="form">
	              <div class="input-group ">
	              
	                <span class="input-group-btn">
	                <button ng-click="ct.submit()" type="submit" class="btn btn-info" type="submit">Rechercher</button>
	                </span>
	               <input type="search" class="form-control" ng-model="searchInput"
	               placeholder="Search...">

	              </div>
	            </form>
	    	
	    	<hr>
	    </div>
	    
	 </div>
	<h1>{{ct.result.length}} : Résultat(s)</h1>
    <div id="resultSearc" ng-controller="showResearchResult as srr">
	    <div  ng-repeat="r in ct.result | orderBy : - level ">
	    	<h1>{{r.levelIndice}}</h1>
	    	<a href ng-click="srr.show($event,r.rubrique,r.value)"><h3>{{r.link}} <tt class="badge">{{r.rubrique}}</tt></h3> </a>
	    	<p class="affiche" >

	    		{{r.affiche }}...
	    	</p>
	    	<p class="detail">
	    		<tt>In {{r.level}} / {{r.rubrique}}</tt>
	    	</p>
	    	<hr>
	    </div>
    </div>
   
</div>
<script type="text/javascript">
$(document).ready(function(){


	var timer = setInterval(function(){
		var p =0;
		$.each($('.affiche'),function(index,val){
			var that = $(val);
			that.html(that.text());
			if(that.text().indexOf('{{') != -1){
					p++;
				}
		});
		if(p == 0){
			clearInterval(timer);
		}
		},10);



});
	(function(){
		
		var ob = {
			nom : "ABY",
			prenom : "Junior"
		}
		var nom = "JuNio";
		var n = "aby je";
		var texte = "je suis Aby junior, mais on m'appelle aussi juninho. l'homme bleu";
		var index = "nom";
		//alert(ob[index])
		//$('#formSearchIndex').hide();
		//$('#test').html(findWrods(n,texte));
	})();
</script>